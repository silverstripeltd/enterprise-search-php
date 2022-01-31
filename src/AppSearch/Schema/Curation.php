<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

class Curation
{
	public string $id;

	/** List of affected search queries */
	public array $queries;

	/** List of promoted document IDs */
	public array $promotedDocIds;

	/** List of hidden document IDs */
	public array $hiddenDocIds;
	public object $suggestion;


	/**
	 * @param string[] $queries
	 */
	public function __construct(array $queries)
	{
		$this->queries = $queries;
	}
}
