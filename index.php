<?require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/header.php");

CModule::IncludeModule('iblock');
Cmodule::IncludeModule('catalog');

// ID раздела, в котором нужно установить значение пользовательского поля
    $sectionId = 2814;

    // Код пользовательского поля
    $userFieldCode = 'UF_SECTION_BINDING_BRAND';

    // Значение, которое нужно установить
    $value = '591';

    // Получаем информацию о разделе
    $section = SectionTable::getList([
        'filter' => ['=ID' => $sectionId],
        'select' => ['ID', $userFieldCode]
    ])->fetch();

    SectionTable::update($section['ID'], [
        $userFieldCode => $value
    ]);



require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/footer.php");?>