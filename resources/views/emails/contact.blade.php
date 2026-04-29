<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f4f4;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:20px;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#2c3e50; color:#ffffff; padding:20px; text-align:center;">
                            <h2 style="margin:0;">New Contact Message</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:20px; color:#333;">

                            <p><strong>Name:</strong> {{ $data->name }}</p>
                            <p><strong>Phone:</strong> {{ $data->phone }}</p>
                            <p><strong>Email:</strong> {{ $data->email }}</p>

                            <p><strong>Message:</strong></p>
                            <p style="background:#f9f9f9; padding:15px; border-left:4px solid #2c3e50;">
                                {{ $data->message }}
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#ecf0f1; text-align:center; padding:15px; font-size:12px; color:#777;">
                            <p style="margin:0;">This email was sent from your website contact form.</p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>