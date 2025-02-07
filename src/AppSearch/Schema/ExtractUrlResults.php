<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class ExtractUrlResults
{
	public ExtractUrlDownloadResults $download;
	public ExtractUrlExtractionResults $extraction;
	public ExtractUrlIndexingResults $indexing;
	public ExtractUrlDeduplicationResults $deduplication;


	public function __construct(
		ExtractUrlDownloadResults $download,
		ExtractUrlExtractionResults $extraction,
		ExtractUrlIndexingResults $indexing,
		ExtractUrlDeduplicationResults $deduplication
	) {
		$this->download = $download;
		$this->extraction = $extraction;
		$this->indexing = $indexing;
		$this->deduplication = $deduplication;
	}
}
