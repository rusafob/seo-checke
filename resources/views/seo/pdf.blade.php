<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SEO Отчет</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            padding: 20px;
            color: #1A1A2E;
        }

        .header {
            border-bottom: 2px solid #969696;
            padding-bottom: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        .header .logo {
            font-size: 18px;
            font-weight: bold;
        }

        .header .report-id {
            text-align: right;
            font-size: 14px;
        }

        .header .report-id .date {
            font-size: 12px;
            color: #666;
        }

        .page-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .url-block {
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 16px;
            overflow: hidden;
        }

        .url-block .url-header {
            background: #f5f5f7;
            padding: 8px 14px;
            font-weight: bold;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
        }

        .url-block .url-header .status {
            float: right;
            font-weight: normal;
            font-size: 12px;
            color: #666;
        }

        .url-block .url-header .status .ok {
            color: #2E7D32;
        }

        .url-block .url-header .status .error {
            color: #C62828;
        }

        .url-block table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .url-block table td {
            padding: 4px 14px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }

        .url-block table tr:last-child td {
            border-bottom: none;
        }

        .url-block table .label {
            width: 42%;
            font-weight: bold;
            color: #555;
        }

        .url-block table .value {
            width: 58%;
        }

        .green {
            color: #2E7D32;
        }

        .red {
            color: #C62828;
        }

        .orange {
            color: #E65100;
        }

        .gray {
            color: #999;
        }

        .small {
            font-size: 10px;
            color: #666;
        }

        .footer {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            font-size: 10px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">Profi / SEO</div>
        <div class="report-id">
            Отчет №{{ $audit->id }}
            <div class="date">{{ $audit->created_at->format('d.m.Y, H:i') }}</div>
        </div>
    </div>

    <!-- TITLE -->
    <div class="page-title">Результаты проверки</div>

    <!-- URL BLOCKS -->
    @foreach($audit->urls as $url)
        <div class="url-block">
            <div class="url-header">
                {{ $url->url }}
                <span class="status">
                    @if($url->result)
                        @php
                            $allValid = $url->result->h1_is_valid &&
                                        $url->result->title_is_valid &&
                                        $url->result->description_is_valid &&
                                        $url->result->headings_valid;
                        @endphp
                        <span class="{{ $allValid ? 'ok' : 'error' }}">
                            {{ $allValid ? 'Все проверки пройдены' : 'Есть ошибки' }}
                        </span>
                    @endif
                </span>
            </div>

            @if($url->result)
                <table>
                    <tr>
                        <td class="label">Проверка заголовка h1</td>
                        <td class="value">
                            @if($url->result->h1_is_valid)
                                <span class="green">h1 есть на странице + h1 в единственном экземпляре</span>
                            @else
                                <span class="red">{{ $url->result->h1_error_reason ?? 'Заголовок h1 отсутствует' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка структуры заголовков h1-h6</td>
                        <td class="value">
                            @if($url->result->headings_valid)
                                <span class="green">Соблюдение иерархии заголовков</span>
                            @else
                                <span class="red">Несоблюдение иерархии заголовков</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка тега title</td>
                        <td class="value">
                            @if($url->result->title_is_valid)
                                <span class="green">Тег присутствует на странице + в единственном экземпляре</span>
                                <span class="small">(длина: {{ $url->result->title_length ?? 0 }} символов)</span>
                            @else
                                <span class="red">{{ $url->result->title_error_reason ?? 'Тег title не найден' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка мета-тега description</td>
                        <td class="value">
                            @if($url->result->description_is_valid)
                                <span class="green">Тег присутствует на странице + в единственном экземпляре</span>
                                <span class="small">(длина: {{ $url->result->description_length ?? 0 }} символов)</span>
                            @else
                                <span class="red">{{ $url->result->description_error_reason ?? 'Мета-тег description не найден' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка внешних ссылок</td>
                        <td class="value">
                            количество ссылок на внешние сайты: {{ $url->result->external_links_count }}<br>
                            количество ссылок с атрибутом rel="nofollow": {{ $url->result->external_links_nofollow }}<br>
                            количество ссылок без атрибута rel="nofollow": {{ $url->result->external_links_dofollow }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка микроразметки "open graph"</td>
                        <td class="value">
                            @if($url->result->og_marker)
                                <span class="green">Микроразметка присутствует на сайте</span>
                            @else
                                <span class="red">Микроразметка отсутствует на сайте</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка микроразметки "schema.org"</td>
                        <td class="value">
                            @if($url->result->schema_marker)
                                <span class="green">Микроразметка присутствует на сайте</span>
                                @if($url->result->schema_formats)
                                    <span class="small">({{ implode(', ', $url->result->schema_formats) }})</span>
                                @endif
                            @else
                                <span class="red">Микроразметка отсутствует на сайте</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка файла robots.txt</td>
                        <td class="value">
                            @if($url->result->robots_marker)
                                <span class="green">Файл присутствует на сайте</span>
                            @else
                                <span class="red">Файл отсутствует на сайте</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка файла sitemap.xml</td>
                        <td class="value">
                            @if($url->result->sitemap_marker)
                                <span class="green">Файл присутствует на сайте</span>
                            @else
                                <span class="red">Файл отсутствует на сайте</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Проверка кода-ответа сервера</td>
                        <td class="value">
                            @php
                                $code = $url->http_code;
                                if ($code >= 200 && $code < 300) {
                                    $color = 'green';
                                    $label = 'OK';
                                } elseif ($code >= 300 && $code < 400) {
                                    $color = 'orange';
                                    $label = 'Редирект';
                                } elseif ($code >= 400 && $code < 500) {
                                    $color = 'red';
                                    $label = 'Ошибка клиента';
                                } elseif ($code >= 500) {
                                    $color = 'red';
                                    $label = 'Ошибка сервера';
                                } else {
                                    $color = 'gray';
                                    $label = 'Неизвестно';
                                }
                            @endphp
                            <span class="{{ $color }}">{{ $code }} - {{ $label }}</span>
                            @if($url->redirect_final_url)
                                <span class="small">→ {{ $url->redirect_final_url }}</span>
                            @endif
                        </td>
                    </tr>
                </table>
            @else
                <div style="padding:8px 14px; color:#C62828;">Нет данных</div>
            @endif
        </div>
    @endforeach

    @if($audit->urls->count() === 0)
        <div style="text-align:center;padding:40px 0;color:#999;">
            Нет данных для отображения
        </div>
    @endif

    <div class="footer">
        Отчет сгенерирован автоматически {{ date('d.m.Y H:i:s') }}
    </div>

</body>
</html>