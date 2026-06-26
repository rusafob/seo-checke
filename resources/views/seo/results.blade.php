<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты проверки</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #FFFFFF;
            min-height: 100vh;
        }

        .header {
            width: 100%;
            height: 100px;
            border-bottom: 2px solid #969696;
            background: #FFFFFF;
            display: flex;
            align-items: center;
            padding: 0 108px;
        }

        .header-logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .header-logo img {
            height: 50px;
            width: auto;
        }

        .main-content {
            max-width: 1924px;
            margin: 0 auto;
            padding: 40px 108px 40px 108px;
        }

        .page-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 32px;
            color: #000000;
            margin-bottom: 24px;
        }

        .report-header {
            width: 100%;
            max-width: 1704px;
            background: #F5F5F7;
            border-radius: 15px;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 24px;
        }

        .report-header .report-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 32px;
            color: #000000;
        }

        .report-header .report-title span {
            font-weight: 400;
            color: #666;
            font-size: 24px;
        }

        .report-header .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .report-header .btn-save-db {
            padding: 16px 28px;
            background: #E78D57;
            border: none;
            border-radius: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: #FFFFFF;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .report-header .btn-save-db:hover {
            background: #D97D47;
        }

        .report-header .btn-save-db:active {
            transform: scale(0.97);
        }

        .report-header .btn-save-db svg {
            width: 20px;
            height: 20px;
        }

        .report-header .btn-pdf {
            padding: 16px 28px;
            background: #E78D57;
            border: none;
            border-radius: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: #FFFFFF;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .report-header .btn-pdf:hover {
            background: #D97D47;
        }

        .report-header .btn-pdf:active {
            transform: scale(0.97);
        }

        .report-header .btn-pdf svg {
            width: 20px;
            height: 20px;
        }

        .alert {
            padding: 12px 20px;
            border-radius: 10px;
            margin-bottom: 16px;
            font-size: 15px;
            max-width: 1704px;
        }

        .alert-success {
            background: #E8F5E9;
            color: #2E7D32;
            border: 1px solid #A5D6A7;
        }

        .alert-info {
            background: #E3F2FD;
            color: #1565C0;
            border: 1px solid #90CAF9;
        }

        .alert-error {
            background: #FFEBEE;
            color: #C62828;
            border: 1px solid #EF9A9A;
        }

        .url-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width: 1704px;
        }

        .url-item {
            background: #F5F5F7;
            border-radius: 15px;
            overflow: hidden;
        }

        .url-item .url-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
            cursor: pointer;
            transition: background 0.2s;
            user-select: none;
        }

        .url-item .url-header:hover {
            background: #EBEBED;
        }

        .url-item .url-header .url-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .site-icon {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .site-icon svg {
            width: 30px;
            height: 30px;
        }

        .url-item .url-header .url-left .url-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: #000000;
        }

        .url-item .url-header .toggle-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .url-item .url-header .toggle-btn.open {
            transform: rotate(180deg);
        }

        .url-item .url-header .toggle-btn svg {
            width: 24px;
            height: 24px;
        }

        .url-item .url-details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
            padding: 0 24px;
        }

        .url-item .url-details.open {
            max-height: 1500px;
            padding: 0 24px 24px 24px;
        }

        .details-table {
            width: 100%;
            background: #FFFFFF;
            border-radius: 12px;
            border-collapse: collapse;
            overflow: hidden;
        }

        .details-table th,
        .details-table td {
            padding: 8px 16px;
            text-align: left;
            font-size: 14px;
            vertical-align: top;
        }

        .details-table th {
            font-weight: 600;
            font-size: 15px;
            color: #1A1A2E;
            border-bottom: 3px solid #1A1A2E;
            padding-bottom: 6px;
        }

        .details-table td {
            border-bottom: 1px solid #E8E8EC;
            padding: 6px 16px;
        }

        .details-table tr:last-child td {
            border-bottom: none;
        }

        .details-table .col-param {
            width: 50%;
        }

        .details-table .col-status {
            width: 50%;
        }

        .status-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #1A1A2E;
            margin-right: 8px;
            flex-shrink: 0;
            vertical-align: middle;
        }

        .status-text {
            font-weight: 400;
            color: #1A1A2E;
            vertical-align: middle;
        }

        .status-text .error {
            color: #F44336;
        }

        .icon-circle {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            font-weight: 700;
            margin-right: 6px;
            flex-shrink: 0;
            vertical-align: middle;
        }

        .icon-circle.green {
            background: #E8F5E9;
            color: #4CAF50;
        }

        .icon-circle.red {
            background: #FFEBEE;
            color: #F44336;
        }

        .icon-circle.orange {
            background: #FFF3E0;
            color: #FF9800;
        }

        @media (max-width: 768px) {
            .details-table th,
            .details-table td { font-size: 12px; padding: 4px 10px; }
            .details-table .col-param,
            .details-table .col-status { width: 100%; display: block; }
            .details-table tr { display: block; margin-bottom: 8px; }
            .details-table td { display: block; border-bottom: none; }
            .report-header .btn-save-db,
            .report-header .btn-pdf { font-size: 16px; padding: 12px 20px; }
        }

        @media (max-width: 480px) {
            .report-header .btn-save-db,
            .report-header .btn-pdf { font-size: 14px; padding: 10px 16px; }
            .report-header .btn-save-db svg,
            .report-header .btn-pdf svg { width: 16px; height: 16px; }
            .url-item .url-header .url-left .url-text { font-size: 14px; }
        }
    </style>
</head>
<body>

    <header class="header">
        <a href="{{ route('history.index') }}" class="header-logo" style="text-decoration:none; cursor:pointer;">
            <img src="{{ asset('images/e95dde06083f3a9580cd88ac5816f3d387a352e7.png') }}" alt="Profi / SEO">
        </a>
    </header>

    <div class="main-content">

        <h1 class="page-title">Результаты проверки после проверки</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('info'))
            <div class="alert alert-info">{{ session('info') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <div class="report-header">
            <div class="report-title">
                Отчёт №{{ $audit->id }} <span>{{ $audit->created_at->format('d.m.Y, H:i') }}</span>
            </div>
            <div class="actions">
                <form action="{{ route('save.report', $audit->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-save-db">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="18" rx="2" fill="none" stroke="white"/>
                            <line x1="8" y1="9" x2="16" y2="9" stroke="white"/>
                            <line x1="8" y1="13" x2="13" y2="13" stroke="white"/>
                        </svg>
                        Сохранить в БД
                    </button>
                </form>
                <a href="{{ route('results.pdf', $audit->id) }}" target="_blank" class="btn-pdf">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="12" y1="18" x2="12" y2="12"/>
                        <polyline points="9 15 12 18 15 15"/>
                    </svg>
                    Скачать PDF
                </a>
            </div>
        </div>

        <div class="url-list">
            @foreach($audit->urls as $url)
                <div class="url-item">
                    <div class="url-header" onclick="toggleDetails(this)">
                        <div class="url-left">
                            <div class="site-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 3C17.9706 3 22 7.02944 22 12" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                                    <path d="M11 21C6.02944 21 2 16.9706 2 12" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                                    <path d="M8 15L16 9" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <span class="url-text">{{ $url->url }}</span>
                        </div>
                        <button class="toggle-btn" onclick="event.stopPropagation(); toggleDetails(this.parentElement)">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#969696" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <div class="url-details">
                        @if($url->result)
                            <table class="details-table">
                                <thead>
                                    <tr>
                                        <th class="col-param">Проверка параметра</th>
                                        <th class="col-status">Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->h1_is_valid ? 'green' : 'red' }}">
                                                {{ $url->result->h1_is_valid ? '✓' : '✕' }}
                                            </span>
                                            Проверка заголовка h1
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            @if($url->result->h1_is_valid)
                                                <span class="status-text">h1 есть на странице + h1 в единственном экземпляре</span>
                                            @else
                                                <span class="status-text error">{{ $url->result->h1_error_reason ?? 'Нет заголовка h1' }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->headings_valid ? 'green' : 'red' }}">
                                                {{ $url->result->headings_valid ? '✓' : '✕' }}
                                            </span>
                                            Проверка структуры заголовков h1-h6
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">{{ $url->result->headings_valid ? 'Соблюдение иерархии заголовков' : 'Несоблюдение иерархии заголовков' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->title_is_valid ? 'green' : 'red' }}">
                                                {{ $url->result->title_is_valid ? '✓' : '✕' }}
                                            </span>
                                            Проверка тега &lt;title&gt;
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            @if($url->result->title_is_valid)
                                                <span class="status-text">Тег присутствует на странице + в единственном экземпляре</span>
                                            @else
                                                <span class="status-text error">{{ $url->result->title_error_reason ?? 'Тег title не найден' }}</span>
                                            @endif
                                            <span class="status-text" style="color:#666; font-size:12px;">(длина: {{ $url->result->title_length ?? 0 }} символов)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->description_is_valid ? 'green' : 'red' }}">
                                                {{ $url->result->description_is_valid ? '✓' : '✕' }}
                                            </span>
                                            Проверка мета-тега &lt;description&gt;
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            @if($url->result->description_is_valid)
                                                <span class="status-text">Тег присутствует на странице + в единственном экземпляре</span>
                                            @else
                                                <span class="status-text error">{{ $url->result->description_error_reason ?? 'Мета-тег description не найден' }}</span>
                                            @endif
                                            <span class="status-text" style="color:#666; font-size:12px;">(длина: {{ $url->result->description_length ?? 0 }} символов)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle green">✓</span>
                                            Проверка внешних ссылок
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">
                                                количество ссылок на внешние сайты: {{ $url->result->external_links_count }}<br>
                                                количество ссылок с атрибутом rel="nofollow": {{ $url->result->external_links_nofollow }}<br>
                                                количество ссылок без атрибута rel="nofollow": {{ $url->result->external_links_dofollow }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->og_marker ? 'green' : 'red' }}">
                                                {{ $url->result->og_marker ? '✓' : '✕' }}
                                            </span>
                                            Проверка микроразметки "open graph"
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">{{ $url->result->og_marker ? 'Микроразметка присутствует на сайте' : 'Микроразметка отсутствует на сайте' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->schema_marker ? 'green' : 'red' }}">
                                                {{ $url->result->schema_marker ? '✓' : '✕' }}
                                            </span>
                                            Проверка микроразметки "schema.org"
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">
                                                {{ $url->result->schema_marker ? 'Микроразметка присутствует на сайте' : 'Микроразметка отсутствует на сайте' }}
                                                @if($url->result->schema_formats)
                                                    <span style="color:#666; font-size:12px;">({{ implode(', ', $url->result->schema_formats) }})</span>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->robots_marker ? 'green' : 'red' }}">
                                                {{ $url->result->robots_marker ? '✓' : '✕' }}
                                            </span>
                                            Проверка файла robots.txt
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">{{ $url->result->robots_marker ? 'Файл присутствует на сайте' : 'Файл отсутствует на сайте' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle {{ $url->result->sitemap_marker ? 'green' : 'red' }}">
                                                {{ $url->result->sitemap_marker ? '✓' : '✕' }}
                                            </span>
                                            Проверка файла sitemap.xml
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">{{ $url->result->sitemap_marker ? 'Файл присутствует на сайте' : 'Файл отсутствует на сайте' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-param">
                                            <span class="icon-circle orange">!</span>
                                            Проверка кода-ответа сервера
                                        </td>
                                        <td class="col-status">
                                            <span class="status-dot"></span>
                                            <span class="status-text">
                                                {{ $url->http_code }} - Редирект
                                                @if($url->redirect_final_url)
                                                    <span style="color:#666; font-size:12px;">→ {{ $url->redirect_final_url }}</span>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <div style="padding:16px 0; color:#F44336; font-size:14px;">Нет данных для отображения</div>
                        @endif
                    </div>
                </div>
            @endforeach

            @if($audit->urls->count() === 0)
                <div style="text-align:center;padding:60px 20px;color:#969696;font-family:Montserrat;font-size:18px;">
                    Нет данных для отображения
                </div>
            @endif
        </div>

    </div>

    <script>
        function toggleDetails(headerElement) {
            const item = headerElement.closest('.url-item');
            const details = item.querySelector('.url-details');
            const toggleBtn = item.querySelector('.toggle-btn');

            if (details.classList.contains('open')) {
                details.classList.remove('open');
                toggleBtn.classList.remove('open');
            } else {
                document.querySelectorAll('.url-details.open').forEach(el => {
                    el.classList.remove('open');
                    el.closest('.url-item').querySelector('.toggle-btn').classList.remove('open');
                });
                details.classList.add('open');
                toggleBtn.classList.add('open');
            }
        }
    </script>

</body>
</html>