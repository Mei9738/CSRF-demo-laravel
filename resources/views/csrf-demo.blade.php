<head>
    <title>CSRF Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-300 min-h-screen py-40">
    <div class= "container mx-auto">
        <!-- <div class="max-w-3xl mx-10 mt-10 bg-gray-100 shadow-md rounded-lg p-12"> -->
            <div class = "w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
            {{-- Scene Content --}}
            @if ($step == 1)
                {{-- Scene 1: User Logs In --}}
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-6">Scene 1: The User Logs In</h1>
                    <div>
                        <p class="mb-6">
                            Yesterday, you logged into your account on your favorite website—let’s call it "Oceana." 
                            You entered your credentials, and everything worked fine. You went about your day, and now today, 
                            you’re still logged in, your session is still active.
                        </p>
                    </div>
                    <a href="{{ route('csrf.demo', ['step' => 2]) }}" class="rounded bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 float-right">
                        Next
                    </a>
                </div>
            @elseif ($step == 2)
                {{-- Scene 2: Suspicious Email --}}
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">Scene 2: You Receive a Suspicious Email</h1>
                    <p class="mb-6">This morning, as you're browsing the web, you get an email in your inbox:</p>
                    <!--<div class="bg-gray-100 p-4 rounded border mb-6">
                        <p><strong>Subject:</strong> "Important: Your password reset request"</p>
                        <p>Hello [Your Name],</p>
                        <p>
                            We received a request to reset your password. If you made this request, click the link below to reset your password:
                        </p>
                        <a href="{{ route('csrf.demo', ['step' => 'phishing']) }}" class="text-blue-500 hover:underline">
                            Click Here to Reset Your Password
                        </a>
                        <p class="mt-4">If you didn't request a password reset, please disregard this email.</p>
                        <p>Best regards,<br>The SecureSite Team</p>
                    -->

                    <!-- The email -->
                    <div class="p-4 rounded border mb-6">
                        <table align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;max-width:544px;margin-right:auto;margin-left:auto;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                            <tbody>
                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                <td align="center" valign="top" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:16px">
                                    <center style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;max-width:768px;margin-right:auto;margin-left:auto;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                        <tbody>
                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellspacing="0" cellpadding="0" align="left" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody>
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td style="box-sizing:border-box;text-align:center!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0" align="center">
                                                    <div class="flex justify-center items-center ">
                                                    <svg viewBox="0 0 32 32" width="32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>sunset 2</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -829.000000)" fill="#000000"> <path d="M390,855 L366,855 C365.447,855 365,855.447 365,856 C365,856.553 365.447,857 366,857 L390,857 C390.553,857 391,856.553 391,856 C391,855.447 390.553,855 390,855 L390,855 Z M393,851 L363,851 C362.447,851 362,851.447 362,852 C362,852.553 362.447,853 363,853 L393,853 C393.553,853 394,852.553 394,852 C394,851.447 393.553,851 393,851 L393,851 Z M393.476,849 C393.806,847.72 394,846.384 394,845 C394,836.164 386.837,829 378,829 C369.163,829 362,836.164 362,845 C362,846.384 362.194,847.72 362.524,849 L393.476,849 L393.476,849 Z M383,859 L373,859 C372.447,859 372,859.447 372,860 C372,860.553 372.447,861 373,861 L383,861 C383.553,861 384,860.553 384,860 C384,859.447 383.553,859 383,859 L383,859 Z" id="sunset-2" sketch:type="MSShapeGroup"> </path> </g> </g> </g>
                                                    </svg></div>
                                                    <h2 style="box-sizing:border-box;margin-top:8px!important;margin-bottom:0;font-size:24px;font-weight:400!important;line-height:1.25!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important"> Update your Oceana password </h2>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                        <tbody class="bg-gray-50">
                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                            <td style="box-sizing:border-box;border-radius:6px!important;display:block!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0;border:1px solid #e1e4e8">
                                            <table align="center" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;text-align:center!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody>
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:16px">
                                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                        <tbody>
                                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                                            <h3 style="box-sizing:border-box;margin-top:0;margin-bottom:0;font-size:20px;font-weight:600;line-height:1.25!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">Oceana password reset</h3>
                                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                    <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                                                    <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                        <tbody>
                                                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                            <td style="box-sizing:border-box;text-align:left!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0" align="left">
                                                                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:10px;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">Just a friendly reminder to update your password for added security. It’s a quick step that helps keep your account safe.</p>
                                                                            <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                <tbody>
                                                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                    <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                        <tbody>
                                                                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                                <tbody>
                                                                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                                    <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                                                                                    <a href="{{ route('csrf.demo', ['step' => 'phishing']) }}" rel="noopener noreferrer" style="background-color:#1f883d!important;box-sizing:border-box;color:#fff;text-decoration:none;display:inline-block;font-size:inherit;font-weight:500;line-height:1.5;white-space:nowrap;vertical-align:middle;border-radius:.5em;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:.75em 1.5em;border:1px solid #1f883d" target="_blank">Update your password</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:10px;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important"> Let us know if you need any help! </p>
                                                                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:10px;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important"> Thanks, <br style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important"> The Oceana Team </p>
                                                                            </td>
                                                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;text-align:center!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                        <tbody>
                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:10px;color:#6a737d!important;font-size:14px!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important"> This email is a reminder to update your password to help keep your account secure. </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;width:100%!important;text-align:center!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                        <tbody>
                                        <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">
                                            <table style="box-sizing:border-box;border-spacing:0;border-collapse:collapse;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tbody style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                <tr style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">
                                                    <td height="16" style="font-size:16px;line-height:16px;box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;padding:0">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:10px;color:#6a737d!important;font-size:12px!important;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important">Oceana, Inc. ・88 Colin P Kelly Jr Street ・San Francisco, CA 94107</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </center>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>     
                <!-- <a href="{{ route('csrf.demo', ['step' => 3]) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Next
                </a> -->

            @elseif ($step == 'phishing')
                {{-- Scene 3: Phishing Page --}}
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">Scene 3: Phishing Page</h1>
                    <div class="p-8 rounded border mb-6">
                        <form action="{{ route('csrf.demo', ['step' => 'phishing-success']) }}" method="POST">
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Account Setting</h2>
                                    <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                                            <div class="mt-2">
                                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="John">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                                            <div class="mt-2">
                                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm " value="Doe">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                                            <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="johndoe@example.com">
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Street address</label>
                                            <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="123 Maple St">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2 sm:col-start-1">
                                            <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
                                            <div class="mt-2">
                                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="Springfield">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="region" class="block text-sm/6 font-medium text-gray-900">State / Province</label>
                                            <div class="mt-2">
                                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="Illinois">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">ZIP / Postal code</label>
                                            <div class="mt-2">
                                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" value="62701">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="password" class="block text-sm/6 font-medium text-gray-900">New password</label>
                                        <div class="mt-2">
                                            <input type="password" name="password" id="password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="confirm-password" class="block text-sm/6 font-medium text-gray-900">Confirm password</label>
                                        <div class="mt-2">
                                            <input type="password" name="confirm-password" id="sconfirm-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm">
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>  
                        </form>
                    </div>
                </div>
            @elseif ($step == 'phishing-success')
                {{-- Scene 4: Phishing Success --}}
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">Scene 4: Details Updated Successfully</h1>
                    <p class="mb-6">Your details have been updated. Thank you!</p>
                    <!-- Button to open the modal -->
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <!-- modal trigger -->
                        <div>
                            <label for="tw-modal" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Done!
                            </label>
                        </div>
                        
                        <!-- hidden toggle -->
                        <input type="checkbox" id="tw-modal" class="peer fixed appearance-none opacity-0">

                        <!-- Modal -->
                        <label for="tw-modal" class="pointer-events-none invisible fixed inset-0 cursor-pointer items-center justify-center transition-all duration-100 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                            <!-- Modal backdrop -->
                            <div class="fixed inset-0 z-50 bg-gray-500/50 transition-opacity"></div>

                            <!-- modal box -->
                            <div class=" flex items-center justify-center fixed inset-0 z-50">
                                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
                                                        <svg class="size-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                        </svg>
                                                    </div>
                                                    <div class="bg-white mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-base font-semibold text-gray-900 mt-2" id="modal-title">What Just Happened?</h3>
                                                        <ul role="list" class="mt-2 list-disc">
                                                            <li class="text-sm text-gray-600 mb-1">You were logged into Oceana</li>
                                                            <li class="text-sm text-gray-600 mb-1">You received a phishing email that made you think it was a legitimate request from the site.</li>
                                                            <li class="text-sm text-gray-600 mb-1">You clicked the link in the email and were taken to an account setting page.</li>
                                                            <li class="text-sm text-gray-600">The malicious page automatically submitted the form to the real Oceana, and because there was no CSRF protection, the site processed it without checking if the request was legitimate.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                <a href="{{ route('csrf.demo', ['step' => 'A_Solution']) }}" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">See the solution</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- <div class="bg-gray-100 p-4 rounded border">
                    <p><strong>Name:</strong> {{ request('name') }}</p>
                    <p><strong>Address:</strong> {{ request('address') }}</p>
                    <p><strong>Phone Number:</strong> {{ request('phone') }}</p>
                    <p><strong>Password:</strong> {{ request('password') }}</p>
                </div> -->
                <!-- <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Start Over
                </a> -->
            @elseif ($step == 'A_Solution')
                {{-- Scene 5: A Solution (CSRF Protection) --}}

                <!-- Needs more styling since it doesn't look appealing -->
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">Now, let’s show how Oceana can prevent this from happening by using CSRF protection in Laravel.</h1>

                    <div class="mb-6">
                        <h2 class="text-lg font-semibold px-2">CSRF Token: The Fix</h2>
                        <ul role="list" class="mt-2 list-disc px-7">
                            <li class="text-base text-gray-600 mb-1">In Laravel, CSRF protection is enabled by default.</li>
                            <li class="text-base text-gray-600 mb-1">If Oceana had CSRF protection, the password reset form would include a CSRF token to verify that the form is actually coming from the user who logged in and not from a malicious site.</li>
                        </ul>
                    </div>
                    
                    <div class="mb-6 text-base">
                        <p>Let’s see how we can protect this form using Tailwind and Laravel CSRF Protection.</p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-semibold px-2">What happens with CSRF protection?</h2>
                        <ul role="list" class="mt-2 list-disc px-7">
                            <li class="text-base text-gray-600 mb-1">When you submit the form, the server checks the CSRF token.</li>
                            <li class="text-base text-gray-600 mb-1">If the token is missing or invalid (like in the case of a malicious attack), the server will reject the request with a 419 Page Expired error.</li>
                        </ul>
                    </div>

                    <div class="mb-6 text-base">
                        <p>This is exactly what happens when an attacker tries to trick you into resetting your password—the form won't be accepted without a valid CSRF token.</p>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{ route('csrf.demo', ['step' => 'Lets_Test_It']) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</a>
                    </div>
                </div>
            @elseif ($step == 'Lets_Test_It')
                {{-- Scene 6: A Solution (CSRF Protection) --}}

                <!-- Needs more styling since it doesn't look appealing -->
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">Let's Test It</h1>
                    <!-- <p class="mb-2">Let’s show this in action:</p> -->

                    <div class="flex">
                        <!-- Left section for the Vulnerable Form -->
                        <div class="flex-1 p-4">
                            <h2 class="text-xl font-semibold mb-4">Vulnerable Form</h2>
                            <p class="mb-6">Without the CSRF token, you’re able to submit the password reset request, and the attacker can change your password.</p>
                            
                            <!-- Vulnerable Form -->
                            <form id="vuln-form" action="/profile-vulnerable" method="POST">
                                <input type="text" name="name" value="User 1" class="rounded-md bg-white px-3 py-1.5 mr-2 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm">
                                <button for="vulnerable" type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit (No CSRF)</button>
                            </form>

                            <!-- hidden toggle -->
                            <input type="checkbox" id="vulnerable" class="peer fixed appearance-none opacity-0">

                            <!-- Modal -->
                            <label for="vulnerable" class="pointer-events-none invisible fixed inset-0 cursor-pointer items-center justify-center transition-all duration-100 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                                <!-- Modal backdrop -->
                                <div class="fixed inset-0 z-50 bg-gray-500/50 transition-opacity"></div>

                                <!-- modal box -->
                                <div class="flex items-center justify-center fixed inset-0 z-50">
                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                        <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <div class="sm:flex sm:items-center sm:justify-center">
                                                        <div class="mx-auto flex items-center justify-center bg-green-100 rounded-full w-16 h-16 sm:w-12 sm:h-12">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-green-600 w-8 h-8">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="bg-white mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
                                                        <h3 class="text-base font-semibold text-gray-900 mt-2" id="modal-title">Updated Successfully</h3>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                    <button id="A" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <script>
                                // Function to prevent form submission and open the modal
                                document.getElementById('vuln-form').addEventListener('submit', function(event) {
                                    event.preventDefault();
                                    openModal(); 
                                });

                                // Function to open the modal
                                function openModal() {
                                    document.getElementById('modal').style.display = 'flex'; 
                                    document.getElementById('att-vuln').checked = true; 
                                }

                                // Function to close the modal
                                document.getElementById('A').addEventListener('click', function() {
                                    document.getElementById('modal').style.display = 'none';
                                    document.getElementById('att-vuln').checked = false; 
                                });
                            </script>

                            <!-- Malicious Form -->
                            <form id="att-vuln-form" action="/profile-vulnerable" method="POST">
                                <input class="rounded-md bg-white px-3 py-1.5 mr-2 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" type="text" name="name" value="Malicious User 1">
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Malicious Submit (no CSRF)</button>
                            </form>

                            <!-- Hidden Toggle -->
                            <input type="checkbox" id="att-vuln" class="peer fixed appearance-none opacity-0">

                            <!-- Modal -->
                            <label for="att-vuln" class="pointer-events-none invisible fixed inset-0 cursor-pointer items-center justify-center transition-all duration-100 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                                <!-- Modal backdrop -->
                                <div class="fixed inset-0 z-50 bg-gray-500/50 transition-opacity"></div>

                                <!-- Modal Box -->
                                <div id="modal" class="flex items-center justify-center fixed inset-0 z-50">
                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                        <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <!-- Success Icon -->
                                                    <div class="sm:flex sm:items-center sm:justify-center">
                                                        <div class="mx-auto flex items-center justify-center bg-green-100 rounded-full w-16 h-16 sm:w-12 sm:h-12">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-green-600 w-8 h-8">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"></path>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <!-- Success Message -->
                                                    <div class="bg-white mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
                                                        <h3 class="text-base font-semibold text-gray-900 mt-2" id="modal-title">Updated Successfully</h3>
                                                    </div>
                                                </div>

                                                <!-- Close Button -->
                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                    <button id="B" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <script>
                                // Prevent form submission and open modal
                                document.getElementById('att-vuln-form').addEventListener('submit', function(event) {
                                    event.preventDefault(); 
                                    openModal(); 
                                });

                                // Open the modal
                                function openModal() {
                                    document.getElementById('modal').style.display = 'flex'; 
                                    document.getElementById('att-vuln').checked = true; 
                                }

                                // Close the modal
                                document.getElementById('B').addEventListener('click', function() {
                                    document.getElementById('modal').style.display = 'none'; 
                                    document.getElementById('att-vuln').checked = false; 
                                });
                            </script>

                        </div>
                        <!-- Divider Line -->
                        <div class="border-l-2 h-full my-2"></div>

                        <!-- Right section for the Protected Form -->
                        <div class="flex-1 p-4">
                            <h2 class="text-xl font-semibold mb-4">Protected Form</h2>
                            <p class="mb-6">With the CSRF token, the form will be rejected if the attacker tries to submit a form without the correct token.</p>

                            <!-- Protected Form -->
                            <form id="safe-form" action="/profile-protected" method="POST">
                                @csrf
                                <input class="rounded-md bg-white px-3 py-1.5 mr-2 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" type="text" name="name" value="User 2">
                                <button for="safe" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">Submit (With CSRF)</button>
                            </form>    

                                <!-- hidden toggle -->
                                <input type="checkbox" id="safe" class="peer fixed appearance-none opacity-0">
                                <!-- Modal -->
                                <label for="safe" class="pointer-events-none invisible fixed inset-0 cursor-pointer items-center justify-center transition-all duration-100 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                                    <!-- Modal backdrop -->
                                    <div class="fixed inset-0 z-50 bg-gray-500/50 transition-opacity"></div>

                                    <!-- modal box -->
                                    <div class="flex items-center justify-center fixed inset-0 z-50">
                                        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                                                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="sm:flex sm:items-center sm:justify-center">
                                                            <div class="mx-auto flex items-center justify-center bg-green-100 rounded-full w-16 h-16 sm:w-12 sm:h-12">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-green-600 w-8 h-8">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="bg-white mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
                                                            <h3 class="text-base font-semibold text-gray-900 mt-2" id="modal-title">Updated Successfully</h3>
                                                        </div>
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                        <button id="C" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <script>
                                    // Function to prevent form submission and open the modal
                                    document.getElementById('safe-form').addEventListener('submit', function(event) {
                                        event.preventDefault(); 
                                        openModal(); 
                                    });

                                    // Function to open the modal
                                    function openModal() {
                                        document.getElementById('modal').style.display = 'flex'; 
                                        document.getElementById('att-vuln').checked = true; 
                                    }

                                    // Function to close the modal
                                    document.getElementById('C').addEventListener('click', function() {
                                        document.getElementById('modal').style.display = 'none'; 
                                        document.getElementById('att-vuln').checked = false; 
                                    });
                                </script>

                            <!-- Malicious Form -->
                            <form action="/profile-protected" method="POST">
                                <input class="rounded-md bg-white px-3 py-1.5 mr-2 text-base text-gray-900 border border-gray-300 focus:border-2 focus:border-indigo-600 focus:outline-none placeholder:text-gray-400 sm:text-sm" type="text" name="name" value="Malicious User 2">
                                <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">Malicious Submit (With CSRF)</button>
                            </form>
                        </div>
                    </div>

                    <a href="{{ route('csrf.demo', ['step' => 'A_Conclusion']) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 float-right">
                        Next
                    </a>
                </div>
            
            @elseif ($step == 'A_Conclusion')
                {{-- Scene 7: A Conclusion --}}
                <div class= "py-16 px-12">
                    <h1 class="text-2xl font-bold mb-4">And Finally..</h1>
                    <p class="mb-6">
                        We reached the end of our demo, you've seen how CSRF works in real-world scenario,
                        a phishing email that leads to an attack and how CSRF protection is must because it can
                        save users from this kind of attack by validation requests before they're processed.
                        </br>
                       You can learn more about CSRF by going to our about page or you can retry this mini demo. </br> Thank you!
                    </p>
                    <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 float-right">
                        Start Over
                    </a> 
                </div> 

            @else
                {{-- Invalid Step --}}
                <h1 class="text-2xl font-bold text-red-500">Invalid Scene</h1>
                <p>Please start the demo again.</p>
                <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Start Over
                </a>
            @endif
        </div>
    </div>
</body>
</html>
