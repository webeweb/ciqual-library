<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Model;

use JsonSerializable;
use WBW\Library\Ciqual\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringCodeTrait;

/**
 * Source.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Source implements JsonSerializable {

    use StringCodeTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    const DOM_NODE_NAME = "SOURCES";

    /**
     * Citation réf.
     *
     * @var string|null
     */
    protected $citationRef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ciotation réf.
     *
     * @return string|null Returns the citation réf.
     */
    public function getCitationRef(): ?string {
        return $this->citationRef;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSource($this);
    }

    /**
     * Set the citation réf.
     *
     * @param string|null $citationRef The citation réf.
     * @return Source Returns this source.
     */
    public function setCitationRef(?string $citationRef): Source {
        $this->citationRef = $citationRef;
        return $this;
    }
}
