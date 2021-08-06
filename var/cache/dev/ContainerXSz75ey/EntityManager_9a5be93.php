<?php

namespace ContainerXSz75ey;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde704 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer94888 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties795e9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getConnection', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getMetadataFactory', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getExpressionBuilder', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'beginTransaction', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getCache', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getCache();
    }

    public function transactional($func)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'transactional', array('func' => $func), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->transactional($func);
    }

    public function commit()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'commit', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->commit();
    }

    public function rollback()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'rollback', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getClassMetadata', array('className' => $className), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'createQuery', array('dql' => $dql), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'createNamedQuery', array('name' => $name), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'createQueryBuilder', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'flush', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'clear', array('entityName' => $entityName), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->clear($entityName);
    }

    public function close()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'close', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->close();
    }

    public function persist($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'persist', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'remove', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'refresh', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'detach', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'merge', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getRepository', array('entityName' => $entityName), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'contains', array('entity' => $entity), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getEventManager', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getConfiguration', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'isOpen', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getUnitOfWork', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getProxyFactory', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'initializeObject', array('obj' => $obj), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'getFilters', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'isFiltersStateClean', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'hasFilters', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return $this->valueHolderde704->hasFilters();
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

        $instance->initializer94888 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderde704) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde704 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde704->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__get', ['name' => $name], $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        if (isset(self::$publicProperties795e9[$name])) {
            return $this->valueHolderde704->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde704;

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

        $targetObject = $this->valueHolderde704;
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
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde704;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde704;
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
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__isset', array('name' => $name), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde704;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde704;
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
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__unset', array('name' => $name), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde704;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde704;
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
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__clone', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        $this->valueHolderde704 = clone $this->valueHolderde704;
    }

    public function __sleep()
    {
        $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, '__sleep', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;

        return array('valueHolderde704');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer94888 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer94888;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer94888 && ($this->initializer94888->__invoke($valueHolderde704, $this, 'initializeProxy', array(), $this->initializer94888) || 1) && $this->valueHolderde704 = $valueHolderde704;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde704;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde704;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
