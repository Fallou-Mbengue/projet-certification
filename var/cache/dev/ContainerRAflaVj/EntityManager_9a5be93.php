<?php

namespace ContainerRAflaVj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc389f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7dac8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a524 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getConnection', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getMetadataFactory', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getExpressionBuilder', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'beginTransaction', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getCache', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'transactional', array('func' => $func), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->transactional($func);
    }

    public function commit()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'commit', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->commit();
    }

    public function rollback()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'rollback', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getClassMetadata', array('className' => $className), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'createQuery', array('dql' => $dql), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'createNamedQuery', array('name' => $name), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'createQueryBuilder', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'flush', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'clear', array('entityName' => $entityName), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->clear($entityName);
    }

    public function close()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'close', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->close();
    }

    public function persist($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'persist', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'remove', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'refresh', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'detach', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'merge', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'contains', array('entity' => $entity), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getEventManager', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getConfiguration', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'isOpen', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getUnitOfWork', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getProxyFactory', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'initializeObject', array('obj' => $obj), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'getFilters', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'isFiltersStateClean', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'hasFilters', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return $this->valueHolderc389f->hasFilters();
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

        $instance->initializer7dac8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc389f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc389f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc389f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__get', ['name' => $name], $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        if (isset(self::$publicProperties8a524[$name])) {
            return $this->valueHolderc389f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc389f;

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

        $targetObject = $this->valueHolderc389f;
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
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc389f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc389f;
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
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__isset', array('name' => $name), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc389f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc389f;
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
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__unset', array('name' => $name), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc389f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc389f;
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
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__clone', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        $this->valueHolderc389f = clone $this->valueHolderc389f;
    }

    public function __sleep()
    {
        $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, '__sleep', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;

        return array('valueHolderc389f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7dac8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7dac8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7dac8 && ($this->initializer7dac8->__invoke($valueHolderc389f, $this, 'initializeProxy', array(), $this->initializer7dac8) || 1) && $this->valueHolderc389f = $valueHolderc389f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc389f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc389f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
