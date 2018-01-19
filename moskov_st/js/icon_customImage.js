ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [55.771574, 37.573856],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),


        myPlacemark1 = new ymaps.Placemark([55.708394, 37.626915], {
            hintContent: 'Московское Кафе / Московская Столовка Адрес: Гамсоновский пер. 5/2. т. 8-926-224-62-61',
            balloonContent: 'Московское Кафе / Московская Столовка Адрес: Гамсоновский пер. 5/2. т. 8-926-224-62-61'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'twomark.png',
            // Размеры метки.
            iconImageSize: [74, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -16],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark2 = new ymaps.Placemark([55.727972, 37.442491], {
            hintContent: 'Московское Кафе / Московская Столовка Адрес: ул. Ивана Франко д.12. т. 8-926-224-62-31 ',
            balloonContent: 'Московское Кафе / Московская Столовка Адрес: ул. Ивана Франко д.12. т. 8-926-224-62-31 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'twomark.png',
            // Размеры метки.
            iconImageSize: [74, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -16],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark3 = new ymaps.Placemark([55.828814, 37.450881], {
            hintContent: 'Московское Кафе / Московская Столовка Адрес: ул. Свободы д. 13/2 т. 8-926-224-62-43 ',
            balloonContent: 'Московское Кафе / Московская Столовка Адрес: ул. Свободы д. 13/2 т. 8-926-224-62-43 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'twomark.png',
            // Размеры метки.
            iconImageSize: [74, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -16],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark4 = new ymaps.Placemark([55.819009, 37.520276], {
            hintContent: 'Московское Кафе / Московская Столовка Адрес: ул. Клары Цеткин д. 4. т. 8-926-224-62-53 ',
            balloonContent: 'Московское Кафе / Московская Столовка Адрес: ул. Клары Цеткин д. 4. т. 8-926-224-62-53 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'twomark.png',
            // Размеры метки.
            iconImageSize: [74, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -16],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark5 = new ymaps.Placemark([55.853895, 37.517734], {
            hintContent: 'Московская Столовка Адрес: ул. Онежская д. 24 т. 8-929-684-17-36 ',
            balloonContent: 'Московская Столовка Адрес: ул. Онежская д. 24 т. 8-929-684-17-36 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'ms.png',
            // Размеры метки.
            iconImageSize: [37, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-16, -16],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark6 = new ymaps.Placemark([55.662593, 37.640093], {
            hintContent: 'Московская Столовка Адрес: Коломенский проезд д. 4 т. 8-926-224-62-71 ',
            balloonContent: 'Московская Столовка Адрес: Коломенский проезд д. 4 т. 8-926-224-62-71 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'ms.png',
            // Размеры метки.
            iconImageSize: [37, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-8, -8],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark7 = new ymaps.Placemark([55.664070, 37.643677], {
            hintContent: 'Московское Кафе Адрес: Коломенский проезд д. 4 кор. 2 т. 8-929-674-68-30 ',
            balloonContent: 'Московское Кафе Адрес: Коломенский проезд д. 4 кор. 2 т. 8-929-674-68-30 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'mk.png',
            // Размеры метки.
            iconImageSize: [37, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [8, 8],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark8 = new ymaps.Placemark([55.767159, 37.702571], {
            hintContent: 'Московская Столовка Адрес: Госпитальная площадь д. 2 корпус 4 т. 8-926-224-62-59 ',
            balloonContent: 'Московская Столовка Адрес: Госпитальная площадь д. 2 корпус 4 т. 8-926-224-62-59 '
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'ms.png',
            // Размеры метки.
            iconImageSize: [37, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [8, 8],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
        myPlacemark9 = new ymaps.Placemark([55.767691, 37.703829], {
            hintContent: 'Московское Кафе Адрес: Госпитальная площадь д. 2 корпус 28 т. 8-929-614-64-14',
            balloonContent: 'Московское Кафе Адрес: Госпитальная площадь д. 2 корпус 28 т. 8-929-614-64-14'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'mk.png',
            // Размеры метки.
            iconImageSize: [37, 37],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-8, -8],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects
        .add(myPlacemark1)
        .add(myPlacemark2)
        .add(myPlacemark3)
        .add(myPlacemark4)
        .add(myPlacemark5)
        .add(myPlacemark6)
        .add(myPlacemark7)
        .add(myPlacemark8)
        .add(myPlacemark9);
});
