<?php

namespace ContainerYRiVFyH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdab4b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2215e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63c4c = [
        
    ];

    public function getConnection()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getConnection', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getMetadataFactory', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getExpressionBuilder', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'beginTransaction', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getCache', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'transactional', array('func' => $func), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->transactional($func);
    }

    public function commit()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'commit', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->commit();
    }

    public function rollback()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'rollback', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getClassMetadata', array('className' => $className), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'createQuery', array('dql' => $dql), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'createNamedQuery', array('name' => $name), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'createQueryBuilder', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'flush', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'clear', array('entityName' => $entityName), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->clear($entityName);
    }

    public function close()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'close', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->close();
    }

    public function persist($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'persist', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'remove', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'refresh', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'detach', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'merge', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'contains', array('entity' => $entity), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getEventManager', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getConfiguration', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'isOpen', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getUnitOfWork', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getProxyFactory', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'initializeObject', array('obj' => $obj), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'getFilters', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'isFiltersStateClean', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'hasFilters', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return $this->valueHolderdab4b->hasFilters();
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

        $instance->initializer2215e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdab4b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdab4b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdab4b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__get', ['name' => $name], $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        if (isset(self::$publicProperties63c4c[$name])) {
            return $this->valueHolderdab4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdab4b;

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

        $targetObject = $this->valueHolderdab4b;
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
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdab4b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdab4b;
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
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__isset', array('name' => $name), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdab4b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdab4b;
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
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__unset', array('name' => $name), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdab4b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdab4b;
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
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__clone', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        $this->valueHolderdab4b = clone $this->valueHolderdab4b;
    }

    public function __sleep()
    {
        $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, '__sleep', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;

        return array('valueHolderdab4b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2215e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2215e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2215e && ($this->initializer2215e->__invoke($valueHolderdab4b, $this, 'initializeProxy', array(), $this->initializer2215e) || 1) && $this->valueHolderdab4b = $valueHolderdab4b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdab4b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdab4b;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
