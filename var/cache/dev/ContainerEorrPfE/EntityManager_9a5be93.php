<?php

namespace ContainerEorrPfE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5c1da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73f59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01e79 = [
        
    ];

    public function getConnection()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getConnection', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getMetadataFactory', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getExpressionBuilder', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'beginTransaction', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getCache', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'transactional', array('func' => $func), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->transactional($func);
    }

    public function commit()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'commit', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->commit();
    }

    public function rollback()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'rollback', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getClassMetadata', array('className' => $className), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'createQuery', array('dql' => $dql), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'createNamedQuery', array('name' => $name), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'createQueryBuilder', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'flush', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'clear', array('entityName' => $entityName), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->clear($entityName);
    }

    public function close()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'close', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->close();
    }

    public function persist($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'persist', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'remove', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'refresh', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'detach', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'merge', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'contains', array('entity' => $entity), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getEventManager', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getConfiguration', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'isOpen', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getUnitOfWork', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getProxyFactory', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'initializeObject', array('obj' => $obj), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'getFilters', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'isFiltersStateClean', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'hasFilters', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return $this->valueHolder5c1da->hasFilters();
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

        $instance->initializer73f59 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5c1da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c1da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5c1da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__get', ['name' => $name], $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        if (isset(self::$publicProperties01e79[$name])) {
            return $this->valueHolder5c1da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c1da;

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

        $targetObject = $this->valueHolder5c1da;
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
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c1da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5c1da;
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
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__isset', array('name' => $name), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c1da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5c1da;
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
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__unset', array('name' => $name), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c1da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5c1da;
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
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__clone', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        $this->valueHolder5c1da = clone $this->valueHolder5c1da;
    }

    public function __sleep()
    {
        $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, '__sleep', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;

        return array('valueHolder5c1da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer73f59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73f59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73f59 && ($this->initializer73f59->__invoke($valueHolder5c1da, $this, 'initializeProxy', array(), $this->initializer73f59) || 1) && $this->valueHolder5c1da = $valueHolder5c1da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c1da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c1da;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
