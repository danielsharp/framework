<?php namespace Illuminate\Cache;

use Illuminate\Support\Manager;

class CacheManager extends Manager {

	/**
	 * Create an instance of the APC cache driver.
	 *
	 * @return \Illuminate\Cache\ApcStore
	 */
	protected function createApcDriver()
	{
		return $this->repository(new ApcStore(new ApcWrapper));
	}

	/**
	 * Create an instance of the array cache driver.
	 *
	 * @return \Illuminate\Cache\ArrayStore
	 */
	protected function createArrayDriver()
	{
		return $this->repository(new ArrayStore);
	}

	/**
	 * Create an instance of the file cache driver.
	 *
	 * @return \Illuminate\Cache\FileStore
	 */
	protected function createFileDriver()
	{
		$path = $this->app['config']['cache.path'];

		return $this->repository(new FileStore($this->app['files'], $path));
	}

	/**
	 * Create an instance of the Memcached cache driver.
	 *
	 * @return \Illuminate\Cache\MemcachedStore
	 */
	protected function createMemcachedDriver()
	{
		$servers = $this->app['config']['cache.memcached'];

		$memcached = $this->app['memcached.connector']->connect($servers);

		return $this->repository(new MemcachedStore($memcached, $this->app['config']['cache.prefix']));
	}

	/**
	 * Create an instance of the WinCache cache driver.
	 *
	 * @return \Illuminate\Cache\WinCacheStore
	 */
	protected function createWincacheDriver()
	{
		return $this->repository(new WinCacheStore($this->app['config']['cache.prefix']));
	}

	/**
	 * Create an instance of the Redis cache driver.
	 *
	 * @return \Illuminate\Cache\RedisStore
	 */
	protected function createRedisDriver()
	{
		$redis = $this->app['redis']->connection();

		return $this->repository(new RedisStore($redis, $this->app['config']['cache.prefix']));
	}

	/**
	 * Create an instance of the database cache driver.
	 *
	 * @return \Illuminate\Cache\DatabaseStore
	 */
	protected function createDatabaseDriver()
	{
		$connection = $this->getDatabaseConnection();

		$encrypter = $this->app['encrypter'];

		// We allow the developer to specify which connection and table should be used
		// to store the cached items. We also need to grab a prefix in case a table
		// is being used by multiple applications although this is very unlikely.
		$table = $this->app['config']['cache.table'];

		$prefix = $this->app['config']['cache.prefix'];

		return $this->repository(new DatabaseStore($connection, $encrypter, $table, $prefix));
	}

	/**
	 * Get the database connection for the database driver.
	 *
	 * @return \Illuminate\Database\Connection
	 */
	protected function getDatabaseConnection()
	{
		$connection = $this->app['config']['cache.connection'];

		return $this->app['db']->connection($connection);
	}

	/**
	 * Create a new cache repository with the given implementation.
	 *
	 * @param  \Illuminate\Cache\StoreInterface  $store
	 * @return \Illuminate\Cache\Repository
	 */
	protected function repository(StoreInterface $store)
	{
		return new Repository($store);
	}

	/**
	 * Get the default cache driver name.
	 *
	 * @return string
	 */
	protected function getDefaultDriver()
	{
		return $this->app['config']['cache.driver'];
	}

}