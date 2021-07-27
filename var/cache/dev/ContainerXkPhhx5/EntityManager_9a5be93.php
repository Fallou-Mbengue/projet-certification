<?php

namespace ContainerXkPhhx5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder78372 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf375f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa4d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getConnection', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getMetadataFactory', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getExpressionBuilder', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'beginTransaction', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getCache', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'transactional', array('func' => $func), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->transactional($func);
    }

    public function commit()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'commit', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->commit();
    }

    public function rollback()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'rollback', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getClassMetadata', array('className' => $className), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'createQuery', array('dql' => $dql), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'createNamedQuery', array('name' => $name), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'createQueryBuilder', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'flush', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'clear', array('entityName' => $entityName), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->clear($entityName);
    }

    public function close()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'close', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->close();
    }

    public function persist($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'persist', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'remove', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'refresh', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'detach', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'merge', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'contains', array('entity' => $entity), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getEventManager', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getConfiguration', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'isOpen', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getUnitOfWork', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getProxyFactory', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'initializeObject', array('obj' => $obj), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'getFilters', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'isFiltersStateClean', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'hasFilters', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return $this->valueHolder78372->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf375f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder78372) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78372 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder78372->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__get', ['name' => $name], $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        if (isset(self::$publicPropertiesaa4d4[$name])) {
            return $this->valueHolder78372->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78372;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78372;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78372;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78372;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__isset', array('name' => $name), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78372;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder78372;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__unset', array('name' => $name), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78372;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder78372;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__clone', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        $this->valueHolder78372 = clone $this->valueHolder78372;
    }

    public function __sleep()
    {
        $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, '__sleep', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;

        return array('valueHolder78372');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf375f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf375f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf375f && ($this->initializerf375f->__invoke($valueHolder78372, $this, 'initializeProxy', array(), $this->initializerf375f) || 1) && $this->valueHolder78372 = $valueHolder78372;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78372;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78372;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
