<?php

namespace Inferno\DoctrineProxies\__CG__\GC\Player\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Player extends \GC\Player\Model\Player implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerId', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'galaxyPosition', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'metal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'metalPerTick', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'crystal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'crystalPerTick', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'extractorMetal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'extractorCrystal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'points', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'isAdmiral', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'isCommander', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'rankingPosition', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'faction', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'galaxy', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'universe', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'user', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerFleets', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'targetPlayerFleets', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerTechnologies', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerUnitConstructions', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerCombatReports', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'scans'];
        }

        return ['__isInitialized__', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerId', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'galaxyPosition', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'metal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'metalPerTick', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'crystal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'crystalPerTick', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'extractorMetal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'extractorCrystal', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'points', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'isAdmiral', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'isCommander', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'rankingPosition', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'faction', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'galaxy', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'universe', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'user', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerFleets', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'targetPlayerFleets', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerTechnologies', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerUnitConstructions', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'playerCombatReports', '' . "\0" . 'GC\\Player\\Model\\Player' . "\0" . 'scans'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Player $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPlayerId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPlayerId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerId', []);

        return parent::getPlayerId();
    }

    /**
     * {@inheritDoc}
     */
    public function isAdmiral(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAdmiral', []);

        return parent::isAdmiral();
    }

    /**
     * {@inheritDoc}
     */
    public function isCommander(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCommander', []);

        return parent::isCommander();
    }

    /**
     * {@inheritDoc}
     */
    public function getGalaxyPosition(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalaxyPosition', []);

        return parent::getGalaxyPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetal', []);

        return parent::getMetal();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetalPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetalPerTick', []);

        return parent::getMetalPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function getCrystal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCrystal', []);

        return parent::getCrystal();
    }

    /**
     * {@inheritDoc}
     */
    public function getCrystalPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCrystalPerTick', []);

        return parent::getCrystalPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtractorMetal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtractorMetal', []);

        return parent::getExtractorMetal();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtractorCrystal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtractorCrystal', []);

        return parent::getExtractorCrystal();
    }

    /**
     * {@inheritDoc}
     */
    public function getPoints(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoints', []);

        return parent::getPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function getRankingPosition(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRankingPosition', []);

        return parent::getRankingPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setRankingPosition(int $rankingPosition): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRankingPosition', [$rankingPosition]);

        parent::setRankingPosition($rankingPosition);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaction(): \GC\Faction\Model\Faction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaction', []);

        return parent::getFaction();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaction(\GC\Faction\Model\Faction $faction): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaction', [$faction]);

        parent::setFaction($faction);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalaxy(): \GC\Galaxy\Model\Galaxy
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalaxy', []);

        return parent::getGalaxy();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniverse(): \GC\Universe\Model\Universe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniverse', []);

        return parent::getUniverse();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): \GC\User\Model\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function relocate(\GC\Galaxy\Model\Galaxy $galaxy): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'relocate', [$galaxy]);

        parent::relocate($galaxy);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfExtractors(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfExtractors', []);

        return parent::getNumberOfExtractors();
    }

    /**
     * {@inheritDoc}
     */
    public function buildMetalExtractors(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildMetalExtractors', [$number]);

        parent::buildMetalExtractors($number);
    }

    /**
     * {@inheritDoc}
     */
    public function buildCrystalExtractors(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildCrystalExtractors', [$number]);

        parent::buildCrystalExtractors($number);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalCostForNextExtractor(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalCostForNextExtractor', []);

        return parent::calculateMetalCostForNextExtractor();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalCostForExtractors(int $number, int $startExtractors): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalCostForExtractors', [$number, $startExtractors]);

        return parent::calculateMetalCostForExtractors($number, $startExtractors);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMaxExtractorConstruction(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMaxExtractorConstruction', []);

        return parent::calculateMaxExtractorConstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetal', [$number]);

        parent::setMetal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function setCrystal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCrystal', [$number]);

        parent::setCrystal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function increaseMetal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseMetal', [$number]);

        parent::increaseMetal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function decreaseMetal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseMetal', [$number]);

        parent::decreaseMetal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function increaseCrystal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseCrystal', [$number]);

        parent::increaseCrystal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function decreaseCrystal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseCrystal', [$number]);

        parent::decreaseCrystal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalIncomePerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalIncomePerTick', []);

        return parent::calculateMetalIncomePerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalIncomePerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalIncomePerTick', []);

        return parent::calculateCrystalIncomePerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalIncomePerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalIncomePerDay', []);

        return parent::calculateMetalIncomePerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalIncomePerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalIncomePerDay', []);

        return parent::calculateCrystalIncomePerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalTaxPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalTaxPerTick', []);

        return parent::calculateMetalTaxPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalTaxPerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalTaxPerDay', []);

        return parent::calculateMetalTaxPerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalTaxPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalTaxPerTick', []);

        return parent::calculateCrystalTaxPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalTaxPerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalTaxPerDay', []);

        return parent::calculateCrystalTaxPerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function grantCommanderRole(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'grantCommanderRole', []);

        parent::grantCommanderRole();
    }

    /**
     * {@inheritDoc}
     */
    public function revokeCommanderRole(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'revokeCommanderRole', []);

        parent::revokeCommanderRole();
    }

    /**
     * {@inheritDoc}
     */
    public function grantAdmiralRole(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'grantAdmiralRole', []);

        parent::grantAdmiralRole();
    }

    /**
     * {@inheritDoc}
     */
    public function revokeAdmiralRole(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'revokeAdmiralRole', []);

        parent::revokeAdmiralRole();
    }

    /**
     * {@inheritDoc}
     */
    public function isAlliedWith(\GC\Player\Model\Player $player): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAlliedWith', [$player]);

        return parent::isAlliedWith($player);
    }

    /**
     * {@inheritDoc}
     */
    public function isInSameAllianceAs(\GC\Player\Model\Player $player): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInSameAllianceAs', [$player]);

        return parent::isInSameAllianceAs($player);
    }

    /**
     * {@inheritDoc}
     */
    public function isInSameGalaxyAs(\GC\Player\Model\Player $player): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInSameGalaxyAs', [$player]);

        return parent::isInSameGalaxyAs($player);
    }

    /**
     * {@inheritDoc}
     */
    public function buildUnit(\GC\Unit\Model\Unit $unit, int $quantity): \GC\Player\Model\PlayerUnitConstruction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildUnit', [$unit, $quantity]);

        return parent::buildUnit($unit, $quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function hasResourcesForUnitAndQuantity(\GC\Unit\Model\Unit $unit, int $quantity): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasResourcesForUnitAndQuantity', [$unit, $quantity]);

        return parent::hasResourcesForUnitAndQuantity($unit, $quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function hasUnitRequirementsFor(\GC\Unit\Model\Unit $unit): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasUnitRequirementsFor', [$unit]);

        return parent::hasUnitRequirementsFor($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function isUnitInConstruction(\GC\Unit\Model\Unit $unit): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUnitInConstruction', [$unit]);

        return parent::isUnitInConstruction($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerUnitConstructionOf(\GC\Unit\Model\Unit $unit): ?\GC\Player\Model\PlayerUnitConstruction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerUnitConstructionOf', [$unit]);

        return parent::getPlayerUnitConstructionOf($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMaxUnits(\GC\Unit\Model\Unit $unit): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMaxUnits', [$unit]);

        return parent::calculateMaxUnits($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerUnitConstructions(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerUnitConstructions', []);

        return parent::getPlayerUnitConstructions();
    }

    /**
     * {@inheritDoc}
     */
    public function createPlayerTechnology(\GC\Technology\Model\Technology $technology): \GC\Player\Model\PlayerTechnology
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPlayerTechnology', [$technology]);

        return parent::createPlayerTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerTechnologies(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerTechnologies', []);

        return parent::getPlayerTechnologies();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerTechnologyByTechnology(\GC\Technology\Model\Technology $technology): ?\GC\Player\Model\PlayerTechnology
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerTechnologyByTechnology', [$technology]);

        return parent::getPlayerTechnologyByTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerTechnologiesInConstruction(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerTechnologiesInConstruction', []);

        return parent::getPlayerTechnologiesInConstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnologiesInConstruction(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnologiesInConstruction', []);

        return parent::getTechnologiesInConstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function isPlayerTechnologyInConstruction(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPlayerTechnologyInConstruction', [$technology]);

        return parent::isPlayerTechnologyInConstruction($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerTechnologiesCompleted(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerTechnologiesCompleted', []);

        return parent::getPlayerTechnologiesCompleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnologiesCompleted(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnologiesCompleted', []);

        return parent::getTechnologiesCompleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnologiesCompletedWithCrystalIncome(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnologiesCompletedWithCrystalIncome', []);

        return parent::getTechnologiesCompletedWithCrystalIncome();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalCrystalIncomeFromTechnologiesPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalCrystalIncomeFromTechnologiesPerTick', []);

        return parent::getTotalCrystalIncomeFromTechnologiesPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalCrystalIncomeFromTechnologiesPerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalCrystalIncomeFromTechnologiesPerDay', []);

        return parent::getTotalCrystalIncomeFromTechnologiesPerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnologiesCompletedWithMetalIncome(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnologiesCompletedWithMetalIncome', []);

        return parent::getTechnologiesCompletedWithMetalIncome();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalMetalIncomeFromTechnologiesPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalMetalIncomeFromTechnologiesPerTick', []);

        return parent::getTotalMetalIncomeFromTechnologiesPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalMetalIncomeFromTechnologiesPerDay(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalMetalIncomeFromTechnologiesPerDay', []);

        return parent::getTotalMetalIncomeFromTechnologiesPerDay();
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnologiesCompletedWithIncome(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnologiesCompletedWithIncome', []);

        return parent::getTechnologiesCompletedWithIncome();
    }

    /**
     * {@inheritDoc}
     */
    public function isPlayerTechnologyCompleted(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPlayerTechnologyCompleted', [$technology]);

        return parent::isPlayerTechnologyCompleted($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTechnologyByFeatureKey(string $featureKey): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTechnologyByFeatureKey', [$featureKey]);

        return parent::hasTechnologyByFeatureKey($featureKey);
    }

    /**
     * {@inheritDoc}
     */
    public function hasResourcesForTechnology(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasResourcesForTechnology', [$technology]);

        return parent::hasResourcesForTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTechnologyRequirementsFor(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTechnologyRequirementsFor', [$technology]);

        return parent::hasTechnologyRequirementsFor($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function createPlayerCombatReport(string $dataJson): \GC\Player\Model\PlayerCombatReport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPlayerCombatReport', [$dataJson]);

        return parent::createPlayerCombatReport($dataJson);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerCombatReports(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerCombatReports', []);

        return parent::getPlayerCombatReports();
    }

    /**
     * {@inheritDoc}
     */
    public function createScan(string $dataJson): \GC\Scan\Model\Scan
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createScan', [$dataJson]);

        return parent::createScan($dataJson);
    }

    /**
     * {@inheritDoc}
     */
    public function getScans(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScans', []);

        return parent::getScans();
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetPlayerFleets(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetPlayerFleets', []);

        return parent::getTargetPlayerFleets();
    }

    /**
     * {@inheritDoc}
     */
    public function addTargetPlayerFleet(\GC\Player\Model\PlayerFleet $playerFleet): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTargetPlayerFleet', [$playerFleet]);

        parent::addTargetPlayerFleet($playerFleet);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTargetPlayerFleet(\GC\Player\Model\PlayerFleet $playerFleet): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTargetPlayerFleet', [$playerFleet]);

        parent::removeTargetPlayerFleet($playerFleet);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTargetPlayerFleet(\GC\Player\Model\PlayerFleet $playerFleet): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTargetPlayerFleet', [$playerFleet]);

        return parent::hasTargetPlayerFleet($playerFleet);
    }

    /**
     * {@inheritDoc}
     */
    public function createPlayerFleet(bool $isMovable = false): \GC\Player\Model\PlayerFleet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPlayerFleet', [$isMovable]);

        return parent::createPlayerFleet($isMovable);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleets(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleets', []);

        return parent::getPlayerFleets();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetById(int $playerFleetId): ?\GC\Player\Model\PlayerFleet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetById', [$playerFleetId]);

        return parent::getPlayerFleetById($playerFleetId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetOrbit(): ?\GC\Player\Model\PlayerFleet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetOrbit', []);

        return parent::getPlayerFleetOrbit();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetStationary(): \GC\Player\Model\PlayerFleet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetStationary', []);

        return parent::getPlayerFleetStationary();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsMovable(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsMovable', []);

        return parent::getPlayerFleetsMovable();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsOrbitAndMovable(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsOrbitAndMovable', []);

        return parent::getPlayerFleetsOrbitAndMovable();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsUnitQuantityOf(\GC\Unit\Model\Unit $unit): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsUnitQuantityOf', [$unit]);

        return parent::getPlayerFleetsUnitQuantityOf($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitsMovableQuantity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitsMovableQuantity', []);

        return parent::getUnitsMovableQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitsStationaryQuantity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitsStationaryQuantity', []);

        return parent::getUnitsStationaryQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsAttackingOriginalOrRecalling(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsAttackingOriginalOrRecalling', []);

        return parent::getPlayerFleetsAttackingOriginalOrRecalling();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsDefendingOriginalOrRecalling(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsDefendingOriginalOrRecalling', []);

        return parent::getPlayerFleetsDefendingOriginalOrRecalling();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsWhichAreAttackingThisPlayer(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsWhichAreAttackingThisPlayer', []);

        return parent::getPlayerFleetsWhichAreAttackingThisPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPlayerFleetsWhichAreAttackingThisPlayer(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPlayerFleetsWhichAreAttackingThisPlayer', []);

        return parent::hasPlayerFleetsWhichAreAttackingThisPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerFleetsWhichAreDefendingThisPlayer(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerFleetsWhichAreDefendingThisPlayer', []);

        return parent::getPlayerFleetsWhichAreDefendingThisPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPlayerFleetsWhichAreDefendingThisPlayer(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPlayerFleetsWhichAreDefendingThisPlayer', []);

        return parent::hasPlayerFleetsWhichAreDefendingThisPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function moveUnits(array $quantityArray, array $playerFleetFromArray, array $playerFleetToArray): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'moveUnits', [$quantityArray, $playerFleetFromArray, $playerFleetToArray]);

        parent::moveUnits($quantityArray, $playerFleetFromArray, $playerFleetToArray);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttackingAndIsTarget(\GC\Player\Model\Player $targetPlayer): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttackingAndIsTarget', [$targetPlayer]);

        return parent::isAttackingAndIsTarget($targetPlayer);
    }

}
