<?php

namespace ContainerShbJrdw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc4413 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f27c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb9540 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getConnection', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getMetadataFactory', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getExpressionBuilder', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'beginTransaction', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getCache', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'transactional', array('func' => $func), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->transactional($func);
    }

    public function commit()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'commit', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->commit();
    }

    public function rollback()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'rollback', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'createQuery', array('dql' => $dql), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'createQueryBuilder', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'flush', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'clear', array('entityName' => $entityName), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'close', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->close();
    }

    public function persist($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'persist', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'remove', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'refresh', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'detach', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'merge', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'contains', array('entity' => $entity), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getEventManager', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getConfiguration', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'isOpen', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getUnitOfWork', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getProxyFactory', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'getFilters', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'isFiltersStateClean', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'hasFilters', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return $this->valueHolderc4413->hasFilters();
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

        $instance->initializer8f27c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc4413) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc4413 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc4413->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__get', ['name' => $name], $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        if (isset(self::$publicPropertiesb9540[$name])) {
            return $this->valueHolderc4413->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4413;

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

        $targetObject = $this->valueHolderc4413;
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
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4413;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc4413;
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
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__isset', array('name' => $name), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4413;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc4413;
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
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__unset', array('name' => $name), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4413;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc4413;
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
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__clone', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        $this->valueHolderc4413 = clone $this->valueHolderc4413;
    }

    public function __sleep()
    {
        $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, '__sleep', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;

        return array('valueHolderc4413');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f27c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f27c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f27c && ($this->initializer8f27c->__invoke($valueHolderc4413, $this, 'initializeProxy', array(), $this->initializer8f27c) || 1) && $this->valueHolderc4413 = $valueHolderc4413;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc4413;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc4413;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
