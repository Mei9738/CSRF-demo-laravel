<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <h1 class="text-2-xl font-bold mb-6">Scene 1: The User Logs In</h1>
                    <div>
                        <p class="mb-6">
                            Yesterday, you logged into your account on your favorite website—let’s call it "SecureSite." 
                            You entered your credentials, and everything worked fine. You went about your day, and now today, 
                            you’re still logged in, your session is still active.
                        </p>
                    </div>
                    <a href="{{ route('csrf.demo', ['step' => 2]) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 float-right">
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

                    // The email
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
                <h1 class="text-2xl font-bold mb-4">Scene 3: Phishing Page</h1>
                <p class="mb-6">Welcome to the fake SecureSite password reset page. Enter your details below:</p>
                <form action="{{ route('csrf.demo', ['step' => 'phishing-success']) }}" method="POST" class="bg-gray-100 p-4 rounded border">
                    @csrf
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name:</label>
                    <input type="text" id="name" name="name" class="mt-2 p-2 w-full border rounded mb-4" placeholder="Full Name" value="John Doe">

                    <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                    <input type="text" id="address" name="address" class="mt-2 p-2 w-full border rounded mb-4" placeholder="123 Fake Street" value="123 Fake Street">

                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                    <input type="text" id="phone" name="phone" class="mt-2 p-2 w-full border rounded mb-4" placeholder="+123456789" value="+123456789">

                    <label for="password" class="block text-sm font-medium text-gray-700">Enter New Password:</label>
                    <input type="password" id="password" name="password" class="mt-2 p-2 w-full border rounded mb-4" placeholder="New Password">

                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Your New Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="mt-2 p-2 w-full border rounded" placeholder="Confirm Password">

                    <button type="submit" class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Update
                    </button>
                </form>

            @elseif ($step == 'phishing-success')
                {{-- Scene 4: Phishing Success --}}
                <h1 class="text-2xl font-bold mb-4">Scene 4: Details Updated Successfully</h1>
                <p class="mb-6">Your details have been updated. Thank you!</p>
                <div class="bg-gray-100 p-4 rounded border">
                    <p><strong>Name:</strong> {{ request('name') }}</p>
                    <p><strong>Address:</strong> {{ request('address') }}</p>
                    <p><strong>Phone Number:</strong> {{ request('phone') }}</p>
                    <p><strong>Password:</strong> {{ request('password') }}</p>
                </div>
                <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Start Over
                </a>

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
