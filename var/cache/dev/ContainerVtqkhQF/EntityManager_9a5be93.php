<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2598 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5da57 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties70291 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getConnection', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getMetadataFactory', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getExpressionBuilder', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'beginTransaction', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getCache', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'transactional', array('func' => $func), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'commit', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->commit();
    }

    public function rollback()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'rollback', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getClassMetadata', array('className' => $className), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'createQuery', array('dql' => $dql), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'createNamedQuery', array('name' => $name), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'createQueryBuilder', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'flush', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'clear', array('entityName' => $entityName), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->clear($entityName);
    }

    public function close()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'close', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->close();
    }

    public function persist($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'persist', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'remove', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'refresh', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'detach', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'merge', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'contains', array('entity' => $entity), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getEventManager', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getConfiguration', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'isOpen', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getUnitOfWork', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getProxyFactory', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'initializeObject', array('obj' => $obj), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'getFilters', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'isFiltersStateClean', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'hasFilters', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return $this->valueHolderc2598->hasFilters();
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

        $instance->initializer5da57 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc2598) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2598 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2598->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__get', ['name' => $name], $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        if (isset(self::$publicProperties70291[$name])) {
            return $this->valueHolderc2598->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2598;

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

        $targetObject = $this->valueHolderc2598;
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
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2598;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2598;
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
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__isset', array('name' => $name), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2598;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2598;
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
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__unset', array('name' => $name), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2598;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2598;
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
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__clone', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        $this->valueHolderc2598 = clone $this->valueHolderc2598;
    }

    public function __sleep()
    {
        $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, '__sleep', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;

        return array('valueHolderc2598');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5da57 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5da57;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5da57 && ($this->initializer5da57->__invoke($valueHolderc2598, $this, 'initializeProxy', array(), $this->initializer5da57) || 1) && $this->valueHolderc2598 = $valueHolderc2598;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2598;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2598;
    }
}
