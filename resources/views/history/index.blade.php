<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная — SEO Checker</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
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

        .start-block {
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

        .start-block .start-text {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .start-block .start-text .main-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 32px;
            color: #000000;
        }

        .start-block .start-text .sub-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 24px;
            color: #000000;
        }

        .btn-start-check {
            width: 283px;
            height: 74px;
            background: #E78D57;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 24px;
            color: #FFFFFF;
            transition: background 0.2s, transform 0.1s;
            flex-shrink: 0;
        }

        .btn-start-check:hover {
            background: #D97D47;
        }

        .btn-start-check:active {
            transform: scale(0.97);
        }

        .btn-start-check .plus-icon {
            width: 24px;
            height: 24px;
            position: relative;
            flex-shrink: 0;
        }

        .btn-start-check .plus-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 2px;
            background: #FFFFFF;
        }

        .btn-start-check .plus-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 2px;
            height: 24px;
            background: #FFFFFF;
        }

        .history-header {
            width: 100%;
            max-width: 1704px;
            background: #F5F5F7;
            border-radius: 15px;
            padding: 0 24px;
            margin-bottom: 24px;
            height: 67px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .history-header .title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 32px;
            color: #000000;
        }

        .search-wrapper {
            display: flex;
            align-items: center;
            gap: 6px;
            width: 502px;
            height: 38px;
            background: #FFFFFF;
            border: 1px solid #969696;
            border-radius: 10px;
            padding: 9px 120px 9px 11px;
        }

        .search-wrapper .search-icon {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-wrapper .search-icon svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: #969696;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .search-wrapper .search-input {
            border: none;
            outline: none;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: #969696;
            background: transparent;
            width: 100%;
        }

        .search-wrapper .search-input::placeholder {
            color: #969696;
        }

        .cards-wrapper {
            width: 100%;
            max-width: 1704px;
            background: #F5F5F7;
            border-radius: 15px;
            padding: 24px;
            min-height: 200px;
        }

        .cards-scroll {
            max-height: 647px;
            overflow-y: auto;
            padding-right: 4px;
        }

        .cards-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .cards-scroll::-webkit-scrollbar-track {
            background: #E8E8EC;
            border-radius: 8px;
        }

        .cards-scroll::-webkit-scrollbar-thumb {
            background: #C0C0C8;
            border-radius: 8px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            padding: 4px;
        }

        .card-item {
            width: 100%;
            max-width: 502px;
            background: #FFFFFF;
            border-radius: 15px;
            padding: 24px;
            box-shadow: -1px 1px 8.3px 0px #00000040;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: 16px;
            justify-self: center;
            position: relative;
        }

        .card-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: #000000;
        }

        .card-meta {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .meta-item .calendar-icon {
            width: 12px;
            height: 12px;
            flex-shrink: 0;
        }

        .meta-item .calendar-icon svg {
            width: 12px;
            height: 12px;
            fill: none;
            stroke: #4C4C4C;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .meta-item .clock-icon {
            width: 12px;
            height: 12px;
            flex-shrink: 0;
        }

        .meta-item .clock-icon svg {
            width: 12px;
            height: 12px;
            fill: none;
            stroke: #4C4C4C;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .meta-item .meta-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 12px;
            color: #4C4C4C;
            text-align: center;
        }

        .card-url-count {
            display: inline-block;
            background: #6FC7EE;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 12px;
            padding: 2px 14px;
            border-radius: 20px;
            height: 24px;
            line-height: 24px;
            white-space: nowrap;
            margin-bottom: 4px;
            align-self: flex-start;
        }

        .card-tags {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .card-tags .tag {
            padding: 0 10px;
            border-radius: 15px;
            border: 1px solid #969696;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 12px;
            color: #000000;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
            background: #FFFFFF;
        }

        .card-tags .tag-more {
            padding: 0 5px;
            border-radius: 50%;
            border: 1px solid #969696;
            background: #F5F5F7;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 12px;
            color: #000000;
            height: 24px;
            min-width: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
        }

        @media (max-width: 1200px) {
            .header {
                padding: 0 40px;
            }
            .main-content {
                padding: 40px 40px;
            }
            .search-wrapper {
                width: 100%;
                max-width: 502px;
                padding: 9px 16px;
            }
            .history-header {
                flex-wrap: wrap;
                height: auto;
                padding: 16px 24px;
                gap: 12px;
            }
            .start-block {
                flex-direction: column;
                align-items: flex-start;
            }
            .btn-start-check {
                width: 100%;
                max-width: 283px;
            }
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 0 20px;
                height: 80px;
            }
            .header-logo img {
                height: 35px;
            }
            .main-content {
                padding: 20px 20px;
            }
            .history-header .title {
                font-size: 24px;
            }
            .start-block .start-text .main-title {
                font-size: 24px;
            }
            .start-block .start-text .sub-title {
                font-size: 18px;
            }
            .btn-start-check {
                font-size: 18px;
                height: 60px;
                max-width: 100%;
            }
            .cards-grid {
                grid-template-columns: 1fr;
            }
            .card-top {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            .card-meta {
                flex-wrap: wrap;
            }
            .cards-wrapper {
                padding: 16px;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 0 12px;
                height: 64px;
            }
            .header-logo img {
                height: 28px;
            }
            .main-content {
                padding: 12px 12px;
            }
            .history-header {
                padding: 12px 16px;
            }
            .history-header .title {
                font-size: 18px;
            }
            .search-wrapper {
                height: 32px;
                padding: 6px 12px;
            }
            .search-wrapper .search-input {
                font-size: 14px;
            }
            .start-block {
                padding: 16px;
            }
            .start-block .start-text .main-title {
                font-size: 18px;
            }
            .start-block .start-text .sub-title {
                font-size: 14px;
            }
            .btn-start-check {
                font-size: 14px;
                height: 48px;
                padding: 10px 16px;
            }
            .btn-start-check .plus-icon {
                width: 18px;
                height: 18px;
            }
            .btn-start-check .plus-icon::before {
                width: 18px;
                height: 2px;
            }
            .btn-start-check .plus-icon::after {
                width: 2px;
                height: 18px;
            }
            .card-item {
                padding: 16px;
                max-width: 100%;
            }
            .card-title {
                font-size: 16px;
            }
            .card-tags .tag,
            .card-tags .tag-more {
                font-size: 10px;
                height: 20px;
                padding: 0 8px;
            }
            .cards-wrapper {
                padding: 12px;
            }
            .cards-grid {
                gap: 16px;
            }
            .card-url-count {
                font-size: 10px;
                height: 20px;
                line-height: 20px;
                padding: 0 10px;
            }
            .meta-item .calendar-icon,
            .meta-item .clock-icon {
                width: 10px;
                height: 10px;
            }
            .meta-item .meta-text {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="header-logo">
            <img src="{{ asset('images/e95dde06083f3a9580cd88ac5816f3d387a352e7.png') }}" alt="Profi / SEO">
        </div>
    </header>

    <div class="main-content">

        <div class="start-block">
            <div class="start-text">
                <span class="main-title">Начало работы</span>
                <span class="sub-title">Для начала работы нажмите на кнопку “Начать проверку”</span>
            </div>
            <button class="btn-start-check" onclick="openModal()">
                <span class="plus-icon"></span>
                Начать проверку
            </button>
        </div>

        <div class="history-header">
            <span class="title">История проверок</span>
            <form action="{{ route('search') }}" method="GET" class="search-wrapper">
                <span class="search-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#969696" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21L16.65 16.65"/>
                    </svg>
                </span>
                <input type="text" name="q" class="search-input" placeholder="profi-studio.ru" value="{{ request('q') }}">
            </form>
        </div>

        <div class="cards-wrapper">
            <div class="cards-scroll">
                <div class="cards-grid">

                    @if($audits->count() > 0)
                        @foreach($audits as $audit)
                            <div class="card-item" onclick="window.location.href='{{ route('history.show', $audit->id) }}'">
                                <div class="card-top">
                                    <span class="card-title">Отчёт №{{ $audit->id }}</span>
                                    <div class="card-meta">
                                        <div class="meta-item">
                                            <span class="calendar-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                                </svg>
                                            </span>
                                            <span class="meta-text">{{ $audit->created_at->format('d.m.Y') }}</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="clock-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"/>
                                                    <polyline points="12 6 12 12 16 14"/>
                                                </svg>
                                            </span>
                                            <span class="meta-text">{{ $audit->created_at->format('H:i') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <span class="card-url-count">{{ count($audit->urls) }} URL</span>

                                <div class="card-tags">
                                    @php
                                        $urls = $audit->urls;
                                        $displayUrls = $urls->take(3);
                                        $remaining = $urls->count() - 3;
                                    @endphp

                                    @foreach($displayUrls as $url)
                                        <span class="tag">{{ $url->url }}</span>
                                    @endforeach

                                    @if($remaining > 0)
                                        <span class="tag-more">+{{ $remaining }}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div style="text-align:center;padding:60px 20px;color:#969696;font-family:Montserrat;font-size:18px;grid-column:1/-1;">
                            Нет ни одной проверки. Начните с кнопки "Начать проверку"
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div>

    <!-- ===== МОДАЛЬНОЕ ОКНО ===== -->
    <div class="modal-overlay" id="seoModal">
        <div class="modal-container">

            <div class="modal-header">
                <div class="modal-header-left">
                    <div class="icon-url">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 3C17.9706 3 22 7.02944 22 12" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                            <path d="M11 21C6.02944 21 2 16.9706 2 12" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                            <path d="M8 15L16 9" stroke="#7EC8E3" stroke-width="3.2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="modal-title">Ввод URL-страниц для проверки</span>
                </div>
                <button class="btn-close-modal" onclick="closeModal()">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                        <path d="M6 6L18 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>

            <div class="modal-divider-full"></div>

            <div class="modal-body">
                <div class="modal-add-row">
                    <div class="search-wrapper-modal">
                        <span class="search-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#969696" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"/>
                                <path d="M21 21L16.65 16.65"/>
                            </svg>
                        </span>
                        <input type="text" class="search-input-modal" id="urlInput" placeholder="https://example.com">
                    </div>
                    <button class="btn-add-url-modal" onclick="addUrl()">Добавить</button>
                </div>

                <div class="modal-url-list" id="urlListContainer">
                    <p class="empty-text">Добавьте URL для проверки</p>
                </div>

                <button class="btn-run-check-modal" onclick="submitCheck()">Запустить</button>
            </div>

        </div>
    </div>

    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-container {
            max-width: 700px;
            width: 100%;
            background: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-height: 90vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 32px 16px 32px;
            flex-shrink: 0;
        }

        .modal-header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .modal-header-left .icon-url {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .modal-header-left .icon-url svg {
            width: 30px;
            height: 30px;
        }

        .modal-header-left .modal-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #000000;
        }

        .modal-header .btn-close-modal {
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
        }

        .modal-header .btn-close-modal:hover {
            transform: rotate(90deg);
        }

        .modal-header .btn-close-modal svg {
            width: 24px;
            height: 24px;
        }

        .modal-divider-full {
            width: 100%;
            height: 2px;
            background: #E8E8EC;
            flex-shrink: 0;
        }

        .modal-body {
            padding: 24px 32px 32px 32px;
            overflow-y: auto;
            flex: 1;
        }

        .modal-add-row {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-bottom: 24px;
        }

        .search-wrapper-modal {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #F5F5F7;
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #E8E8EC;
            transition: border-color 0.2s;
        }

        .search-wrapper-modal:focus-within {
            border-color: #E78D57;
        }

        .search-wrapper-modal .search-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .search-wrapper-modal .search-icon svg {
            width: 20px;
            height: 20px;
            stroke: #969696;
        }

        .search-wrapper-modal .search-input-modal {
            border: none;
            outline: none;
            background: transparent;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: #1A1A2E;
            width: 100%;
        }

        .search-wrapper-modal .search-input-modal::placeholder {
            color: #BDBDBD;
        }

        .btn-add-url-modal {
            padding: 12px 28px;
            background: #E78D57;
            border: none;
            border-radius: 12px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #FFFFFF;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            white-space: nowrap;
            height: 48px;
        }

        .btn-add-url-modal:hover {
            background: #D97D47;
        }

        .btn-add-url-modal:active {
            transform: scale(0.97);
        }

        .modal-url-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            max-height: 300px;
            overflow-y: auto;
            margin-bottom: 24px;
            padding-right: 4px;
        }

        .modal-url-list::-webkit-scrollbar {
            width: 4px;
        }

        .modal-url-list::-webkit-scrollbar-track {
            background: #F5F5F7;
            border-radius: 4px;
        }

        .modal-url-list::-webkit-scrollbar-thumb {
            background: #C0C0C8;
            border-radius: 4px;
        }

        .modal-url-list .empty-text {
            font-family: 'Montserrat', sans-serif;
            color: #BDBDBD;
            font-size: 16px;
            text-align: center;
            padding: 20px 0;
        }

        .modal-url-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #F8F9FA;
            border-radius: 10px;
            padding: 12px 16px;
            transition: background 0.2s;
        }

        .modal-url-item:hover {
            background: #F0F1F3;
        }

        .modal-url-item .url-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 15px;
            color: #1A1A2E;
            word-break: break-all;
        }

        .modal-url-item .btn-remove-url {
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
        }

        .modal-url-item .btn-remove-url:hover {
            transform: rotate(90deg);
        }

        .modal-url-item .btn-remove-url svg {
            width: 18px;
            height: 18px;
        }

        .modal-url-item .btn-remove-url svg path {
            stroke: #999;
            stroke-width: 2;
        }

        .btn-run-check-modal {
            width: 100%;
            padding: 16px;
            background: #E78D57;
            border: none;
            border-radius: 12px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 18px;
            color: #FFFFFF;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
        }

        .btn-run-check-modal:hover {
            background: #D97D47;
        }

        .btn-run-check-modal:active {
            transform: scale(0.98);
        }

        @media (max-width: 768px) {
            .modal-header {
                padding: 16px 20px;
            }
            .modal-body {
                padding: 16px 20px;
            }
            .modal-header-left .modal-title {
                font-size: 18px;
            }
            .modal-add-row {
                flex-direction: column;
                gap: 10px;
            }
            .btn-add-url-modal {
                width: 100%;
                height: 44px;
            }
            .search-wrapper-modal {
                width: 100%;
            }
            .btn-run-check-modal {
                font-size: 16px;
                padding: 14px;
            }
        }

        @media (max-width: 480px) {
            .modal-header {
                padding: 12px 16px;
            }
            .modal-body {
                padding: 12px 16px;
            }
            .modal-header-left .modal-title {
                font-size: 16px;
            }
            .modal-header-left .icon-url {
                width: 28px;
                height: 28px;
            }
            .modal-header-left .icon-url svg {
                width: 24px;
                height: 24px;
            }
            .search-wrapper-modal .search-input-modal {
                font-size: 14px;
            }
            .btn-add-url-modal {
                font-size: 14px;
                height: 40px;
            }
            .btn-run-check-modal {
                font-size: 14px;
                padding: 12px;
            }
            .modal-url-item .url-text {
                font-size: 13px;
            }
        }
    </style>

    <script>
        let urls = [];
        const modal = document.getElementById('seoModal');
        const urlListContainer = document.getElementById('urlListContainer');
        const urlInput = document.getElementById('urlInput');

        function openModal() {
            modal.classList.add('active');
            urlInput.focus();
        }

        function closeModal() {
            modal.classList.remove('active');
        }

        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        function addUrl() {
            const url = urlInput.value.trim();
            if (!url) {
                alert('Введите URL');
                return;
            }

            if (urls.length >= 20) {
                alert('Максимум 20 URL');
                return;
            }

            try {
                new URL(url);
            } catch {
                alert('Введите корректный URL');
                return;
            }

            if (urls.includes(url)) {
                alert('Этот URL уже добавлен');
                return;
            }

            urls.push(url);
            urlInput.value = '';
            renderUrls();
        }

        function removeUrl(index) {
            urls.splice(index, 1);
            renderUrls();
        }

        function renderUrls() {
            if (urls.length === 0) {
                urlListContainer.innerHTML = `
                    <div style="text-align:center;padding:40px 20px;color:#969696;font-family:Montserrat;font-size:16px;">
                        Добавьте URL для проверки
                    </div>
                `;
                return;
            }

            urlListContainer.innerHTML = urls.map((url, index) => `
                <div class="modal-url-item">
                    <span class="url-text">${url}</span>
                    <button class="btn-remove-url" onclick="removeUrl(${index})">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#999" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6 6L18 18" stroke="#999" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            `).join('');
        }

        urlInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addUrl();
            }
        });

        function submitCheck() {
            if (urls.length === 0) {
                alert('Добавьте хотя бы один URL');
                return;
            }

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route("run.check") }}';

            const csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = '{{ csrf_token() }}';
            form.appendChild(csrf);

            urls.forEach(url => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'urls[]';
                input.value = url;
                form.appendChild(input);
            });

            document.body.appendChild(form);
            form.submit();
        }

        renderUrls();
    </script>

</body>
</html>