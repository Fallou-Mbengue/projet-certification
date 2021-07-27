<?php

namespace Container7IANDDr;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9e3b7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercfb87 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties39bde = [
        
    ];

    public function getConnection()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getConnection', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getMetadataFactory', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getExpressionBuilder', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'beginTransaction', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getCache', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getCache();
    }

    public function transactional($func)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'transactional', array('func' => $func), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->transactional($func);
    }

    public function commit()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'commit', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->commit();
    }

    public function rollback()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'rollback', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getClassMetadata', array('className' => $className), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'createQuery', array('dql' => $dql), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'createNamedQuery', array('name' => $name), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'createQueryBuilder', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'flush', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'clear', array('entityName' => $entityName), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->clear($entityName);
    }

    public function close()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'close', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->close();
    }

    public function persist($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'persist', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'remove', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'refresh', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'detach', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'merge', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getRepository', array('entityName' => $entityName), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'contains', array('entity' => $entity), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getEventManager', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getConfiguration', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'isOpen', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getUnitOfWork', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getProxyFactory', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'initializeObject', array('obj' => $obj), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'getFilters', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'isFiltersStateClean', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'hasFilters', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return $this->valueHolder9e3b7->hasFilters();
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

        $instance->initializercfb87 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9e3b7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9e3b7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9e3b7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__get', ['name' => $name], $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        if (isset(self::$publicProperties39bde[$name])) {
            return $this->valueHolder9e3b7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e3b7;

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

        $targetObject = $this->valueHolder9e3b7;
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
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e3b7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9e3b7;
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
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__isset', array('name' => $name), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e3b7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9e3b7;
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
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__unset', array('name' => $name), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e3b7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9e3b7;
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
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__clone', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        $this->valueHolder9e3b7 = clone $this->valueHolder9e3b7;
    }

    public function __sleep()
    {
        $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, '__sleep', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;

        return array('valueHolder9e3b7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercfb87 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercfb87;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercfb87 && ($this->initializercfb87->__invoke($valueHolder9e3b7, $this, 'initializeProxy', array(), $this->initializercfb87) || 1) && $this->valueHolder9e3b7 = $valueHolder9e3b7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e3b7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9e3b7;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
