<?php

class KT_ZZZ_Reference_Config implements KT_Configable {

    const FORM_PREFIX = "kt-zzz-reference";

    // --- fieldsety ---------------------------

    public static function getAllGenericFieldsets() {
        return array(
            self::PARAMS_FIELDSET => self::getParamsFieldset(),
        );
    }

    public static function getAllNormalFieldsets() {
        return array(
            self::PARAMS_FIELDSET => self::getParamsFieldset(),
        );
    }

    public static function getAllSideFieldsets() {
        return array();
    }

    // --- parametry ---------------------------

    const PARAMS_FIELDSET = "kt-zzz-reference-params";
    const PARAMS_DATE = "kt-zzz-reference-params-date";
    const PARAMS_CLIENT = "kt-zzz-reference-params-client";
    const PARAMS_TYPES = "kt-zzz-reference-params-types";

    public static function getParamsFieldset() {
        $fieldset = new KT_Form_Fieldset(self::PARAMS_FIELDSET, __("Parametry", ZZZ_DOMAIN));
        $fieldset->setPostPrefix(self::PARAMS_FIELDSET);

        $referenceTypes = new KT_ZZZ_Reference_Type_Enum();
        $referenceOptions = KT::arrayRemoveByKey($referenceTypes->getTranslates(), KT_ZZZ_Reference_Type_Enum::NONE);

        $fieldset->addText(self::PARAMS_DATE, "Datum");

        $fieldset->addText(self::PARAMS_CLIENT, "Klient");

        $fieldset->addCheckbox(self::PARAMS_TYPES, __("Typy:", ZZZ_DOMAIN))
                ->setOptionsData($referenceOptions);

        return $fieldset;
    }

}
