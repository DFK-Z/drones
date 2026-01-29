<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Беспилотники</title>

    <!-- Временное решение: используем Tailwind из CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#fafafa] text-gray-800">
    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Заголовок группы -->
        <section class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Беспилотные авиационные системы</h1>
            <div class="inline-block px-6 py-2 bg-blue-600 text-white text-xl font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                СП-1-22
            </div>
            <p class="mt-4 text-lg text-gray-600">Специальность для будущих инженеров и операторов БПЛА</p>
        </section>

        <!-- Чему научитесь -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">За время учебы вы научитесь:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Левая колонка -->
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Организация и подготовка БАС</h3>
                        <p class="text-gray-700">Организовывать и осуществлять предварительную и предполетную подготовку беспилотных авиационных систем самолетного и вертолетного типа в производственных условиях.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Эксплуатация БАС</h3>
                        <p class="text-gray-700">Организовывать и осуществлять эксплуатацию БАС с использованием дистанционно пилотируемых и автономных воздушных судов в ожидаемых условиях эксплуатации и особых ситуациях.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Взаимодействие с управлением воздушным движением</h3>
                        <p class="text-gray-700">Осуществлять взаимодействие со службами организации и управления воздушным движением при организации и выполнении полетов ДПВС.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Обработка данных</h3>
                        <p class="text-gray-700">Осуществлять обработку данных, полученных при использовании дистанционно пилотируемых воздушных судов самолетного и вертолетного типа.</p>
                    </div>
                </div>

                <!-- Правая колонка -->
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Проверка исправности оборудования</h3>
                        <p class="text-gray-700">Осуществлять комплекс мероприятий по проверке исправности, работоспособности и готовности ДПВС, станции внешнего пилота, систем обеспечения полетов к использованию.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Учет и документация</h3>
                        <p class="text-gray-700">Вести учёт срока службы, наработки объектов эксплуатации, причин отказов, неисправностей и повреждений беспилотных воздушных судов.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Техническая эксплуатация</h3>
                        <p class="text-gray-700">Осуществлять техническую эксплуатацию бортовых систем и оборудования полезной нагрузки, вычислительных устройств и систем.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Контроль качества</h3>
                        <p class="text-gray-700">Осуществлять контроль качества выполняемых работ и ведение эксплуатационно-технической документации.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Преимущества обучения -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">Преимущества обучения в нашем колледже</h2>
            <p class="text-xl text-center mb-10 text-gray-700">Мы предоставляем все условия для получения качественного образования:</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Отличная материально-техническая база</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Учебные площадки, оснащённые новейшим оборудованием</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Прохождение производственной практики в организациях г. Волгограда и Волгоградской области</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Возможность продолжить образование в ВУЗе после окончания колледжа</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Доступная стоимость обучения</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">✓</span>
                        </div>
                        <p class="text-lg text-gray-700">Бесплатное получение дополнительной рабочей профессии</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Где сможете работать -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Где вы сможете работать:</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $professions = [
                        [
                            'title' => 'Сельское хозяйство',
                            'color' => 'bg-green-100',
                            'text' => 'Контроль роста и обработка земель, построение карт и термограмм, аэрофотография и анализ данных.'
                        ],
                        [
                            'title' => 'Животноводство',
                            'color' => 'bg-amber-100',
                            'text' => 'Выявление заболевших животных с помощью тепловизора по разнице температур.'
                        ],
                        [
                            'title' => 'Лесное хозяйство',
                            'color' => 'bg-emerald-100',
                            'text' => 'Лесозащита, мониторинг состояния земель, выявление пожаров, борьба с браконьерами.'
                        ],
                        [
                            'title' => 'Строительство',
                            'color' => 'bg-orange-100',
                            'text' => 'Планирование и контроль стройки, построение 3D-моделей, обследование сооружений.'
                        ],
                        [
                            'title' => 'Безопасность',
                            'color' => 'bg-red-100',
                            'text' => 'Контроль воздушного пространства, охрана порядка, ликвидация ЧС, поисково-спасательные операции.'
                        ],
                        [
                            'title' => 'Транспорт',
                            'color' => 'bg-blue-100',
                            'text' => 'Обследование ДТП, инспекция дорог, контроль транспортной ситуации, выявление правонарушителей.'
                        ],
                        [
                            'title' => 'Геодезия и картография',
                            'color' => 'bg-purple-100',
                            'text' => 'Построение цифровых моделей рельефа, создание 2D и 3D карт с точностью до сантиметра.'
                        ],
                        [
                            'title' => 'Нефтегазовая отрасль',
                            'color' => 'bg-gray-100',
                            'text' => 'Инспекция трубопроводов, мониторинг строительства, поиск утечек, выявление незаконной деятельности.'
                        ],
                        [
                            'title' => 'Горнодобывающая отрасль',
                            'color' => 'bg-stone-100',
                            'text' => 'Контроль территорий, выявление очагов возгорания, маркшейдерское обеспечение, построение 3D карт.'
                        ],
                        [
                            'title' => 'Кинопроизводство',
                            'color' => 'bg-pink-100',
                            'text' => 'Съемка рекламы и кино, постобработка материалов.'
                        ],
                        [
                            'title' => 'Журналистика',
                            'color' => 'bg-indigo-100',
                            'text' => 'Фото- и видеосъемка на местах событий, подготовка репортажей.'
                        ],
                        [
                            'title' => 'Аэрофотосъемка и блогерство',
                            'color' => 'bg-cyan-100',
                            'text' => 'Создание фото- и видеоконтента для бизнеса и социальных сетей.'
                        ],
                    ];
                @endphp

                @foreach ($professions as $profession)
                    <div class="{{ $profession['color'] }} p-5 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">{{ $profession['title'] }}</h3>
                        <p class="text-gray-700">{{ $profession['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Финальный блок с призывом -->
        <section class="text-center py-10 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Начни карьеру в перспективной отрасли!</h2>
            <div class="inline-block px-8 py-3 bg-blue-600 text-white text-xl font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                СП-1-22
            </div>
            <p class="mt-6 text-lg text-gray-700 max-w-2xl mx-auto">
                Присоединяйтесь к нам и станьте востребованным специалистом в области беспилотных авиационных систем!
            </p>
        </section>
    </main>
</body>
</html>
