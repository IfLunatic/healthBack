<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">

    <style>
        /* Base */
        body{
            margin:0; padding:0;
            background:#f6fbff;
            color:#0f172a;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Inter, Helvetica, Arial, sans-serif;
            line-height:1.6;
        }
        a{ color:#0b5ed7; text-decoration:none; }
        a:hover{ text-decoration:underline; }

        /* Wrapper */
        .wrapper{ width:100%; background:#f6fbff; padding:24px 0; }
        .content{ width:100%; }

        /* Card */
        .inner-body{
            width:570px;
            background:#ffffff;
            border-radius:16px;
            overflow:hidden;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
            border:1px solid #e8f0ff;
        }
        .content-cell{
            padding:28px 28px 24px 28px;
            font-size:15px;
        }

        /* Header / Brand bar */
        .brand{
            width:570px;
            border-radius:16px;
            overflow:hidden;
            margin-bottom:12px;
        }
        .brand-bar{
            background: linear-gradient(135deg, #0b5ed7, #2b7cff);
            color:#fff;
            padding:18px 22px;
            font-weight:700;
            font-size:16px;
            letter-spacing:0.2px;
        }
        .brand-sub{
            background:#ffffff;
            padding:12px 22px 0 22px;
            color:#475569;
            font-size:13px;
        }

        /* Typography inside markdown */
        h1,h2,h3{
            color:#0f172a;
            line-height:1.25;
            margin:0 0 10px 0;
        }
        p{ margin:0 0 12px 0; color:#0f172a; }
        ul,ol{ margin:0 0 12px 18px; padding:0; }
        li{ margin:0 0 6px 0; }

        /* Button (Laravel markdown uses <a class="button button-primary">) */
        .button{
            display:inline-block;
            padding:12px 18px;
            border-radius:12px;
            font-weight:600;
            font-size:14px;
            text-decoration:none;
            border:1px solid transparent;
        }
        .button-primary{
            background:#0b5ed7 !important;
            color:#ffffff !important;
            border-color:#0b5ed7 !important;
        }
        .button-primary:hover{
            background:#0a55c4 !important;
            border-color:#0a55c4 !important;
        }

        /* Subcopy block */
        .subcopy{
            margin-top:18px;
            padding-top:16px;
            border-top:1px solid #e8f0ff;
            color:#64748b;
            font-size:13px;
        }

        /* Footer */
        .footer{
            width:570px;
            margin:14px auto 0 auto;
            text-align:center;
            color:#94a3b8;
            font-size:12px;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .inner-body, .brand, .footer { width:100% !important; }
            .content-cell { padding:20px !important; }
        }
        @media only screen and (max-width: 500px) {
            .button { width:100% !important; text-align:center !important; }
        }
    </style>

    {!! $head ?? '' !!}
</head>
<body>
<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">

                {{-- Optional header slot --}}
                {!! $header ?? '' !!}

                {{-- Brand block (можеш прибрати, якщо не треба) --}}
                <tr>
                    <td align="center">
                        <table class="brand" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td class="brand-bar">
                                    {{ config('app.name') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="brand-sub">
                                    Wellness • Insights • Privacy-first
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Email Body --}}
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0" style="border: hidden !important;">
                        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td class="content-cell">
                                    {!! Illuminate\Mail\Markdown::parse($slot) !!}

                                    @isset($subcopy)
                                        <div class="subcopy">
                                            {!! $subcopy !!}
                                        </div>
                                    @endisset
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Optional footer slot --}}
                {!! $footer ?? '' !!}

                {{-- Default footer (можеш залишити або прибрати) --}}
                <tr>
                    <td align="center">
                        <table class="footer" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td>
                                    © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
</body>
</html>