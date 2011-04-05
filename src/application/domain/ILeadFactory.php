<?php

/**
 * @namespace
 */
namespace Application\Domain\Factory;
use \Application\Domain\Object as DomainObject;

interface ILeadFactory
{
	public function createLead(array $options);
}