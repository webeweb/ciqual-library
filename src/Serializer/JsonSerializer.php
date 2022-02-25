<?php

/*
 * This file is part of the ciqual-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Serializer;

use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Serializer\Helper\JsonSerializerHelper;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Serializer
 */
class JsonSerializer extends JsonSerializerHelper {

    /**
     * Serializes an aliment.
     *
     * @param Aliment $model The model.
     * @return array Returns the serialized aliment.
     */
    public static function serializeAliment(Aliment $model): array {
        return [
            SerializerKeys::CODE                  => $model->getCode(),
            SerializerKeys::NOM_FR                => $model->getNomFr(),
            SerializerKeys::NOM_INDEX_FR          => $model->getNomIndexFr(),
            SerializerKeys::NOM_ENG               => $model->getNomEng(),
            SerializerKeys::CODE_GROUPE           => $model->getCodeGroupe(),
            SerializerKeys::CODE_SOUS_GROUPE      => $model->getCodeSousGroupe(),
            SerializerKeys::CODE_SOUS_SOUS_GROUPE => $model->getCodeSousSousGroupe(),
        ];
    }

    /**
     * Serializes a composition.
     *
     * @param Composition $model The model.
     * @return array Returns the serialized composition.
     */
    public static function serializeComposition(Composition $model): array {
        return [
            SerializerKeys::CODE_ALIMENT     => $model->getCodeAliment(),
            SerializerKeys::CODE_CONSTITUANT => $model->getCodeConstituant(),
            SerializerKeys::TENEUR           => $model->getTeneur(),
            SerializerKeys::MIN              => $model->getMin(),
            SerializerKeys::MAX              => $model->getMax(),
            SerializerKeys::CODE_CONFIANCE   => $model->getCodeConfiance(),
            SerializerKeys::CODE_SOURCE      => $model->getCodeSource(),
        ];
    }

    /**
     * Serializes a constituant.
     *
     * @param Constituant $model The model.
     * @return array Returns the serialized constituant.
     */
    public static function serializeConstituant(Constituant $model): array {
        return [
            SerializerKeys::CODE    => $model->getCode(),
            SerializerKeys::NOM_FR  => $model->getNomFr(),
            SerializerKeys::NOM_ENG => $model->getNomEng(),
        ];
    }

    /**
     * Serializes a groupe aliments.
     *
     * @param GroupeAliments $model The model.
     * @return array Returns the serialized groupe aliments.
     */
    public static function serializeGroupeAliments(GroupeAliments $model): array {
        return [
            SerializerKeys::CODE                     => $model->getCode(),
            SerializerKeys::NOM_FR                   => $model->getNomFr(),
            SerializerKeys::NOM_ENG                  => $model->getNomEng(),
            SerializerKeys::CODE_SOUS_GROUPE         => $model->getCodeSousGroupe(),
            SerializerKeys::NOM_FR_SOUS_GROUPE       => $model->getNomFrSousGroupe(),
            SerializerKeys::NOM_ENG_SOUS_GROUPE      => $model->getNomEngSousGroupe(),
            SerializerKeys::CODE_SOUS_SOUS_GROUPE    => $model->getCodeSousSousGroupe(),
            SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE  => $model->getNomFrSousSousGroupe(),
            SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE => $model->getNomEngSousSousGroupe(),
        ];
    }

    /**
     * Serializes a source.
     *
     * @param Source $model The model.
     * @return array Returns the serialized source.
     */
    public static function serializeSource(Source $model): array {
        return [
            SerializerKeys::CODE         => $model->getCode(),
            SerializerKeys::CITATION_REF => $model->getCitationRef(),
        ];
    }
}
