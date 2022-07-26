<?php

namespace ContainerVJx1Xwu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3eea0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer034c3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties81449 = [
        
    ];

    public function getConnection()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getConnection', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getMetadataFactory', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getExpressionBuilder', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'beginTransaction', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getCache', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'transactional', array('func' => $func), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'commit', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->commit();
    }

    public function rollback()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'rollback', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getClassMetadata', array('className' => $className), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'createQuery', array('dql' => $dql), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'createNamedQuery', array('name' => $name), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'createQueryBuilder', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'flush', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'clear', array('entityName' => $entityName), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->clear($entityName);
    }

    public function close()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'close', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->close();
    }

    public function persist($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'persist', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'remove', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'refresh', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'detach', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'merge', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'contains', array('entity' => $entity), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getEventManager', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getConfiguration', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'isOpen', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getUnitOfWork', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getProxyFactory', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'initializeObject', array('obj' => $obj), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'getFilters', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'isFiltersStateClean', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'hasFilters', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return $this->valueHolder3eea0->hasFilters();
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

        $instance->initializer034c3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3eea0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3eea0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3eea0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__get', ['name' => $name], $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        if (isset(self::$publicProperties81449[$name])) {
            return $this->valueHolder3eea0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eea0;

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

        $targetObject = $this->valueHolder3eea0;
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
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eea0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3eea0;
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
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__isset', array('name' => $name), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eea0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3eea0;
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
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__unset', array('name' => $name), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eea0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3eea0;
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
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__clone', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        $this->valueHolder3eea0 = clone $this->valueHolder3eea0;
    }

    public function __sleep()
    {
        $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, '__sleep', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;

        return array('valueHolder3eea0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer034c3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer034c3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer034c3 && ($this->initializer034c3->__invoke($valueHolder3eea0, $this, 'initializeProxy', array(), $this->initializer034c3) || 1) && $this->valueHolder3eea0 = $valueHolder3eea0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3eea0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3eea0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
