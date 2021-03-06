/**
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    Illicopresta SA <contact@illicopresta.com>
*  @copyright 2007-2014 Illicopresta
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$.extend($.validity.messages, {
    require:"#{field} est requis.",
    // Format validators:
    match:"#{field} est dans un mauvais format.",
    integer:"#{field} doit être un nombre entier positif.",
    date:"#{field} doit être une date.",
    email:"#{field} doit être une adresse email.",
    usd:"#{field} doit être un montant en US Dollars.",
    url:"#{field} doit être une adresse URL.",
    number:"#{field} doit être un nombre.",
    zip:"#{field} doit être un code postal ##### ou #####-####.",
    phone:"#{field} doit être un numéro de téléphone ###-###-####.",
    guid:"#{field} doit être un guid du type {3F2504E0-4F89-11D3-9A0C-0305E82C3301}.",
    time24:"#{field} doit être une heure au format 24 heures (ex: 23:00).",
    time12:"#{field} doit être une heure au format 12 heures (ex:12:00 AM/PM)",

    // Value range messages:
    lessThan:"#{field} doit être inférieur à #{max}.",
    lessThanOrEqualTo:"#{field} doit être inférieur ou égal à #{max}.",
    greaterThan:"#{field} doit être supérieur à #{min}.",
    greaterThanOrEqualTo:"#{field} doit être supérieur ou égal à #{min}.",
    range:"#{field} doit être compris entre #{min} et #{max}.",

    // Value length messages:
    tooLong:"#{field} ne doit pas dépasser #{max} caractères.",
    tooShort:"#{field} doit contenir au minimum #{min} caractères.",

    // Composition validators:
    nonHtml:"#{field} ne doit pas contenir de caractères HTML.",
    alphabet:"#{field} contient des caratères interdits.",

    minCharClass:"#{field} ne doit pas contenir plus de #{min} #{charClass} caractères.",
    maxCharClass:"#{field} ne doit pas contenir moins de #{min} #{charClass} caractères.",

    // Aggregate validator messages:
    equal:"Les valeurs ne correspondent pas.",
    distinct:"Une valeur est répétée.",
    sum:"La somme des valeurs diffère de #{sum}.",
    sumMax:"La somme des valeurs doit être inférieure à #{max}.",
    sumMin:"La somme des valeurs doit être supérieure à #{min}.",

    // Radio validator messages:
    radioChecked:"La valeur sélectionnée est invalide.",

    generic:"Invalide."
});

$.validity.setup({ defaultFieldName:"Ce champ", });