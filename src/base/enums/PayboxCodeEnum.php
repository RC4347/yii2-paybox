<?php

namespace base\enums;

interface PayboxCodeEnum
{
    public const NOT_ACTIVE_METHOD = 9992;
    public const URL_NOT_FOUND = 9993;
    public const DISABLED_BY_STORE = 9994;
    public const PAYMENT_TEST_MODE = 9995;
    public const NOT_ACTIVE_CONTRACT_STORE = 9996;
    public const INCORRECT_STORE_NUMBER = 9997;
    public const INCORRECT_REQUEST_SIGNATURE = 9998;
    public const SYSTEM_ERROR = 9999;
    public const PAYMENT_ERROR = 10000;
    public const ISSUED_CARD = 10001;
    public const TOO_MANY_REQUEST_VERIFICATION_CODE = 10003;
    public const MISSING_3DSECURE = 10004;
    public const INCORRECT_CARD_DETAILS = 10005;
    public const PAYMENT_LIMIT_EXCEEDED = 10006;
    public const DENIED_SECURE_BREACH_CARD = 10007;
    public const INCORRECT_CARD_DETAIL = 10008;
    public const INSUFFICIENT_FUNDS = 10009;
    public const CARD_RESTRICTIONS = 10010;
    public const PAYMENT_SUCCESS = 10011;
    public const UNABLE_CANCEL_TRANSACTION = 10012;
    public const CARD_NOT_ALLOWED_COUNTRY = 10013;
    public const INTERVAL_EXCEEDED = 10014;
    public const PAYMENT_ERROR_TRANSACTION_COMPLETED = 10015;
    public const PAYMENT_ERROR_CONTACT_STORE = 10016;
    public const CARD_EXPIRED = 10017;
    public const PAYMENT_LIFETIME_EXPIRED = 10018;
    public const OPERATION_FAILED = 10019;
    public const REFUND_AMOUNT_EXCEED = 10020;
    public const INVALID_TRANSACTION = 10021;
    public const ERROR_INTERNATIONAL_PAYMENT_SYSTEM = 10025;
    public const PAYOUT_ERROR = 10026;
    public const PAYMENT_FREQUENCY_LIMIT_EXCEEDED = 10028;
    public const IBAN_NOT_WORKING = 10029;
    public const MINIMUM_AMOUNT_ERROR = 10030;
    public const INVALID_PHONE_NUMBER = 10031;
    public const INCORRECT_CARD_NUMBER = 10032;
    public const SERVICE_UNAVAILABLE = 11000;
    public const OPERATION_FAILED_CONTACT_OPERATOR = 11001;
    public const INCORRECT_SMS_CODE = 11002;
    public const DEBT_BALANCE = 11003;
    public const INVALID_NUMBER = 11004;
    public const INCORRECT_AMOUNT = 11005;
    public const INSUFFICIENT_FUNDS_OPERATION = 11006;
    public const REACHED_LIMIT_VERIFICATION_CODE_ATTEMPT = 11007;
    public const VERIFICATION_CODE_EXPIRED = 11008;
    public const OPERATION_CANCELED = 11009;
    public const REACHED_LIMIT_SMS_ATTEMPT = 11010;
    public const RESTRICTION_NUMBER = 11011;
    public const REACHED_LIMIT_PAYMENT_ATTEMPT = 11012;
    public const REDO_OPERATION_ERROR = 11013;
    public const UNEXPECTED_ERROR = 11014;
    public const REACHED_LIMIT_50_MPV = 11015;
    public const MINIMUM_PAYMENT_AMOUNT_1000_TG = 11016;
    public const PAYMENT_ALREADY_CANCELED = 11017;
    public const PAYMENT_ALREADY_RETURNED = 11018;
    public const REACHED_LIMIT_1000_MPV = 11019;
    public const REACT_DAILY_LIMIT_PAYMENT = 11020;
    public const ERROR_NCC = 12000;
    public const CANCELLATION_ERROR = 10033;
    public const PAYMENT_RETURN_ERROR = 10034;
    public const UNSUCCESSFUL_PAYMENT_ERROR = 10035;
    public const PAYMENT_CLEARING_ERROR = 10036;
    public const AMOUNT_EXCEED_ALLOWED_LIMIT_CARD = 10022;
    public const CARD_TEMPORARILY_BLOCKED = 10037;
    public const UNKNOWN_PAYMENT_SYSTEM_ERROR = 99999;
    public const FAILED_DETERMINE_OPERATOR = 11021;
    public const PAYMENT_VIOLATE_RESTRICTION = 11022;
    public const OPERATOR_NOT_ALLOWED_NUMBER = 11023;
    public const CARD_BLOCKED = 10038;
    public const INCORRECT_OPERATION = 10039;
    public const INVALID_CARD_NUMBER = 10040;
    public const CARD_CLOSED = 10041;
    public const PAYMENT_CANNOT_CANCELED = 9013;
    public const REACHED_LIMIT_PIN_CODE_ATTEMPT = 10023;
    public const UNCONFIRMED_PIN = 10024;
    public const REJECTED_SECURE_BREACH = 11024;
    public const CHARGE_BACK_PAYMENT_ERROR = 11026;
    public const NECESSARY_CLEAR_REFUND = 11025;
    public const GEOGRAPHIC_RESTRICTION_CARD = 11027;
    public const CARD_TEMPORARILY_BLOCKED_RETRY_AFTER_30_DAYS = 11028;
    public const CARD_BLOCKED_30_DAYS = 11036;
    public const VERIFICATION_CODE_3DS_NOT_ENTERED = 11049;
    public const MISSING_3DS = 11037;
    public const PIN_CODE_NOT_PASSED_VISA = 11050;
    public const LIMIT_BLOCKING = 11051;
    public const GENERAL_ERROR = 11052;
    public const UNABLE_AUTHORIZE_3DSECURE_CARD = 11053;
    public const INSUFFICIENT_FUNDS_PAYOUT_BALANCE = 8888;
    public const PASS_3DSECURE_ERROR = 8889;
    public const PASSED_180_DAYS_SINCE_TRANSACTION = 11054;
    public const NON_UNIQUE_ORDER_ID = 9991;
    public const MODEL_NOT_FOUND = 1999;
    public const METHOD_NOT_FOUND = 2999;

    public const LABELS = [
        self::NOT_ACTIVE_METHOD => 'Вызываемый метод не активирован для магазина.',
        self::URL_NOT_FOUND => 'Не найден/не указан success/error/post-link URL.',
        self::DISABLED_BY_STORE => 'Запрошенное действие отключено в настройках магазина',
        self::PAYMENT_TEST_MODE => 'Платеж в тестовом режиме',
        self::NOT_ACTIVE_CONTRACT_STORE => 'Отсутствует или не действует контракт с магазином',
        self::INCORRECT_STORE_NUMBER => 'Неверный номер магазина',
        self::INCORRECT_REQUEST_SIGNATURE => 'Некорректная подпись запроса',
        self::SYSTEM_ERROR => 'Ошибка системы',
        self::PAYMENT_ERROR => 'Ошибка оплаты. Сервис недоступен. Повторите попытку позже.',
        self::ISSUED_CARD => 'Ошибка оплаты. Обратитесь в банк выпустивший карту',
        self::TOO_MANY_REQUEST_VERIFICATION_CODE => 'Превышено число попыток ввода проверочного кода',
        self::MISSING_3DSECURE => '3DSecure не введен или введен некорректно',
        self::INCORRECT_CARD_DETAILS => 'Неверно указаны карточные данные',
        self::PAYMENT_LIMIT_EXCEEDED => 'Превышен лимит частоты оплат',
        self::DENIED_SECURE_BREACH_CARD => 'Отказано по причине нарушения безопасности карточных данных.',
        self::INCORRECT_CARD_DETAIL => 'Неверно введены данные карты. Попробуйте повторить оплату.',
        self::INSUFFICIENT_FUNDS => 'Недостаточно средств',
        self::CARD_RESTRICTIONS => 'Ограничения на карте. Свяжитесь с банком выпустившим карту',
        self::PAYMENT_SUCCESS => 'Платеж успешно завершен',
        self::UNABLE_CANCEL_TRANSACTION => 'Невозможно отменить транзакцию. Обратитесь в магазин',
        self::CARD_NOT_ALLOWED_COUNTRY => 'Карта данной страны не разрешена для проведения транзакции',
        self::INTERVAL_EXCEEDED => 'Превышен временной интервал. Свяжитесь с магазином',
        self::PAYMENT_ERROR_TRANSACTION_COMPLETED => 'Ошибка оплаты. Транзакция уже совершена',
        self::PAYMENT_ERROR_CONTACT_STORE => 'Ошибка проведения оплаты. Обратитесь в службу поддержки сайта.',
        self::CARD_EXPIRED => 'Срок действия карты истек.Просим оплатить с другой карты',
        self::PAYMENT_LIFETIME_EXPIRED => 'Время жизни платежа истекло, необходимо создать новый',
        self::OPERATION_FAILED => 'Операция не выполнена. Попробуйте использовать другую карту',
        self::REFUND_AMOUNT_EXCEED => 'Сумма возврата превышает сумму оплаты. Обратитесь в магазин',
        self::INVALID_TRANSACTION => 'Недействительная транзакция - повторить попытку',
        self::ERROR_INTERNATIONAL_PAYMENT_SYSTEM => 'Ошибка на стороне Международной Платежной системы',
        self::PAYOUT_ERROR => 'Ошибка выплаты. Обратитесь в Магазин',
        self::PAYMENT_FREQUENCY_LIMIT_EXCEEDED => 'Превышен лимит по частоте оплаты. Свяжитесь с магазином',
        self::IBAN_NOT_WORKING => 'В данный момент выплаты на IBAN не работают',
        self::MINIMUM_AMOUNT_ERROR => 'Ошибка минимальной суммы. Просим обратиться в Магазин',
        self::INVALID_PHONE_NUMBER => 'Некорректный номер телефона',
        self::INCORRECT_CARD_NUMBER => 'Неправильный/несуществующий номер карты',
        self::SERVICE_UNAVAILABLE => 'Ошибка оплаты, сервис недоступен. Обратитесь в Службу поддержки',
        self::OPERATION_FAILED_CONTACT_OPERATOR => 'Операция неуспешна. Обратитесь в службу поддержки оператора.',
        self::INCORRECT_SMS_CODE => 'Введен неверный код SMS. Повторите еще раз',
        self::DEBT_BALANCE => 'На балансе Вашего номера образовалась задолженность',
        self::INVALID_NUMBER => 'Введен неверный или несуществующий номер',
        self::INCORRECT_AMOUNT => 'Сумма введена некорректно',
        self::INSUFFICIENT_FUNDS_OPERATION => 'Недостаточно средств для проведения операции',
        self::REACHED_LIMIT_VERIFICATION_CODE_ATTEMPT => 'Вы достигли лимита количества попыток кода подтверждения.',
        self::VERIFICATION_CODE_EXPIRED => 'Срок действия кода подтверждения истек. Повторите операцию',
        self::OPERATION_CANCELED => 'Операция отклонена. Обратитесь в службу поддержки оператора',
        self::REACHED_LIMIT_SMS_ATTEMPT => 'Вы превысили количество неуспешных попыток ввода SMS',
        self::RESTRICTION_NUMBER => 'Операция неуспешна, на номере имеются ограничения',
        self::REACHED_LIMIT_PAYMENT_ATTEMPT => 'Вы достигли лимита на количество платежей в сутки.',
        self::REDO_OPERATION_ERROR => 'Операция неуспешна. Вы пытаетесь повторно провести операцию',
        self::UNEXPECTED_ERROR => 'Непредвиденная ошибка. Попробуйте позднее',
        self::REACHED_LIMIT_50_MPV => 'Вы превысили единовременный лимит в размере 50МРП',
        self::MINIMUM_PAYMENT_AMOUNT_1000_TG => 'Минимальная сумма платежа 1000тг',
        self::PAYMENT_ALREADY_CANCELED => 'Платеж уже отменен',
        self::PAYMENT_ALREADY_RETURNED => 'Платеж уже возвращен',
        self::REACHED_LIMIT_1000_MPV => 'Вы превысили месячный лимит в размере 1000МРП',
        self::REACT_DAILY_LIMIT_PAYMENT => 'Дневной лимит по количеству плажетей составляет 30 платежей',
        self::ERROR_NCC => 'Ошибка ЦУС',
        self::CANCELLATION_ERROR => 'Ошибка отмены платежа, отмена уже была проведена ранее.',
        self::PAYMENT_RETURN_ERROR => 'Ошибка возврата платежа, по платежу необходимо провести клиринг',
        self::UNSUCCESSFUL_PAYMENT_ERROR => 'Ошибка платежа, не успешные платежи не могут пройти клиринг',
        self::PAYMENT_CLEARING_ERROR => 'Ошибка клиринга платежа, клиринг уже был проведен ранее',
        self::AMOUNT_EXCEED_ALLOWED_LIMIT_CARD => 'Сумма превышает допустимый лимит на карте.',
        self::CARD_TEMPORARILY_BLOCKED => 'Карта временно заблокирована, обратитесь в банк',
        self::UNKNOWN_PAYMENT_SYSTEM_ERROR => 'Неизвестная ошибка платежной системы',
        self::FAILED_DETERMINE_OPERATOR => 'Не удалось определить оператора или номер введён некорректно',
        self::PAYMENT_VIOLATE_RESTRICTION => 'Параметры платежа нарушают ограничения.',
        self::OPERATOR_NOT_ALLOWED_NUMBER => 'Платежи с номеров этого мобильного оператора не разрешены.',
        self::CARD_BLOCKED => 'Карта заблокирована и подлежит удержанию, обратитесь в банк',
        self::INCORRECT_OPERATION => 'Некорректная операция, обратитесь в банк',
        self::INVALID_CARD_NUMBER => 'Неверный номер счета/карты, обратитесь в банк',
        self::CARD_CLOSED => 'Счет/карта закрыта, обратитесь в банк',
        self::PAYMENT_CANNOT_CANCELED => 'Ошибка отмены платежа, не успешные платежи нельзя отменить.',
        self::REACHED_LIMIT_PIN_CODE_ATTEMPT => 'Превышено количество попыток ввода PIN-кода',
        self::UNCONFIRMED_PIN => 'Неподтвержденный PIN, обратитесь в банк',
        self::REJECTED_SECURE_BREACH => 'Отказано по причине нарушения безопасности. Обратитесь в банк',
        self::CHARGE_BACK_PAYMENT_ERROR => 'По платежу имеется ChargeBack. Возврат невозможен.',
        self::NECESSARY_CLEAR_REFUND => 'Необходимо провести клиринг для возврата, или отменить платеж.',
        self::GEOGRAPHIC_RESTRICTION_CARD => 'Ошибка оплаты. Географические ограничения по банковской карте.',
        self::CARD_TEMPORARILY_BLOCKED_RETRY_AFTER_30_DAYS => 'Карта временно заблокирована. Повторите запрос после 30 дней.',
        self::CARD_BLOCKED_30_DAYS => 'Карта заблокирована на 30 дней, воспользуйтесь другой картой.',
        self::VERIFICATION_CODE_3DS_NOT_ENTERED => 'Код подтверждения 3DS не введен',
        self::MISSING_3DS => '3DSecure не введен',
        self::PIN_CODE_NOT_PASSED_VISA => 'Не пройдена проверка кода PIN владельца карты в системе VISA.',
        self::LIMIT_BLOCKING => 'Блокировка по лимиту',
        self::GENERAL_ERROR => 'Общая ошибка',
        self::UNABLE_AUTHORIZE_3DSECURE_CARD => 'Банк-эмитент не смог провести авторизацию 3dsecure-карты',
        self::INSUFFICIENT_FUNDS_PAYOUT_BALANCE => 'Недостаточно средств! Пополните выплатной баланс',
        self::PASS_3DSECURE_ERROR => 'Ошибка прохождения 3D-Secure',
        self::PASSED_180_DAYS_SINCE_TRANSACTION => 'С момента проведения данной транзакции прошло более 180 дней.',
        self::NON_UNIQUE_ORDER_ID => 'Неуникальный идентификатор заказа',
        self::MODEL_NOT_FOUND => 'Модел не найден',
        self::METHOD_NOT_FOUND => 'Метод не найден',
    ];

    public const VALUES = [
        self::NOT_ACTIVE_METHOD,
        self::URL_NOT_FOUND,
        self::DISABLED_BY_STORE,
        self::PAYMENT_TEST_MODE,
        self::NOT_ACTIVE_CONTRACT_STORE,
        self::INCORRECT_STORE_NUMBER,
        self::INCORRECT_REQUEST_SIGNATURE,
        self::SYSTEM_ERROR,
        self::PAYMENT_ERROR,
        self::ISSUED_CARD,
        self::TOO_MANY_REQUEST_VERIFICATION_CODE,
        self::MISSING_3DSECURE,
        self::INCORRECT_CARD_DETAILS,
        self::PAYMENT_LIMIT_EXCEEDED,
        self::DENIED_SECURE_BREACH_CARD,
        self::INCORRECT_CARD_DETAIL,
        self::INSUFFICIENT_FUNDS,
        self::CARD_RESTRICTIONS,
        self::PAYMENT_SUCCESS,
        self::UNABLE_CANCEL_TRANSACTION,
        self::CARD_NOT_ALLOWED_COUNTRY,
        self::INTERVAL_EXCEEDED,
        self::PAYMENT_ERROR_TRANSACTION_COMPLETED,
        self::PAYMENT_ERROR_CONTACT_STORE,
        self::CARD_EXPIRED,
        self::PAYMENT_LIFETIME_EXPIRED,
        self::OPERATION_FAILED,
        self::REFUND_AMOUNT_EXCEED,
        self::INVALID_TRANSACTION,
        self::ERROR_INTERNATIONAL_PAYMENT_SYSTEM,
        self::PAYOUT_ERROR,
        self::PAYMENT_FREQUENCY_LIMIT_EXCEEDED,
        self::IBAN_NOT_WORKING,
        self::MINIMUM_AMOUNT_ERROR,
        self::INVALID_PHONE_NUMBER,
        self::INCORRECT_CARD_NUMBER,
        self::SERVICE_UNAVAILABLE,
        self::OPERATION_FAILED_CONTACT_OPERATOR,
        self::INCORRECT_SMS_CODE,
        self::DEBT_BALANCE,
        self::INVALID_NUMBER,
        self::INCORRECT_AMOUNT,
        self::INSUFFICIENT_FUNDS_OPERATION,
        self::REACHED_LIMIT_VERIFICATION_CODE_ATTEMPT,
        self::VERIFICATION_CODE_EXPIRED,
        self::OPERATION_CANCELED,
        self::REACHED_LIMIT_SMS_ATTEMPT,
        self::RESTRICTION_NUMBER,
        self::REACHED_LIMIT_PAYMENT_ATTEMPT,
        self::REDO_OPERATION_ERROR,
        self::UNEXPECTED_ERROR,
        self::REACHED_LIMIT_50_MPV,
        self::MINIMUM_PAYMENT_AMOUNT_1000_TG,
        self::PAYMENT_ALREADY_CANCELED,
        self::PAYMENT_ALREADY_RETURNED,
        self::REACHED_LIMIT_1000_MPV,
        self::REACT_DAILY_LIMIT_PAYMENT,
        self::ERROR_NCC,
        self::CANCELLATION_ERROR,
        self::PAYMENT_RETURN_ERROR,
        self::UNSUCCESSFUL_PAYMENT_ERROR,
        self::PAYMENT_CLEARING_ERROR,
        self::AMOUNT_EXCEED_ALLOWED_LIMIT_CARD,
        self::CARD_TEMPORARILY_BLOCKED,
        self::UNKNOWN_PAYMENT_SYSTEM_ERROR,
        self::FAILED_DETERMINE_OPERATOR,
        self::PAYMENT_VIOLATE_RESTRICTION,
        self::OPERATOR_NOT_ALLOWED_NUMBER,
        self::CARD_BLOCKED,
        self::INCORRECT_OPERATION,
        self::INVALID_CARD_NUMBER,
        self::CARD_CLOSED,
        self::PAYMENT_CANNOT_CANCELED,
        self::REACHED_LIMIT_PIN_CODE_ATTEMPT,
        self::UNCONFIRMED_PIN,
        self::REJECTED_SECURE_BREACH,
        self::CHARGE_BACK_PAYMENT_ERROR,
        self::NECESSARY_CLEAR_REFUND,
        self::GEOGRAPHIC_RESTRICTION_CARD,
        self::CARD_TEMPORARILY_BLOCKED_RETRY_AFTER_30_DAYS,
        self::CARD_BLOCKED_30_DAYS,
        self::VERIFICATION_CODE_3DS_NOT_ENTERED,
        self::MISSING_3DS,
        self::PIN_CODE_NOT_PASSED_VISA,
        self::LIMIT_BLOCKING,
        self::GENERAL_ERROR,
        self::UNABLE_AUTHORIZE_3DSECURE_CARD,
        self::INSUFFICIENT_FUNDS_PAYOUT_BALANCE,
        self::PASS_3DSECURE_ERROR,
        self::PASSED_180_DAYS_SINCE_TRANSACTION,
        self::NON_UNIQUE_ORDER_ID,
        self::MODEL_NOT_FOUND,
        self::METHOD_NOT_FOUND
    ];
}