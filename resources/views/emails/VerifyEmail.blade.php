<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Caribi - Email Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
  </head>
  <body style="margin: 0; padding: 0; box-sizing: border-box; ">
    <table align="center" cellpadding="0" cellspacing="0" width="95%">
      <tr>
        <td align="center">
          <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-spacing: 2px 5px;">
            <tr>
              <td align="center" style="padding: 5px 5px 5px 5px; background:#3C78FF">
                <a href="caribi.multylife.id" target="_blank">
                  <img src="https://caribi.multylife.id/wordpress/wp-content/uploads/2022/11/logodombaputih-1.png" alt="Logo" style="width:150px;border:0;"/>
                </a>
              </td>
            </tr>
            <tr>
              <td bgcolor="#fff">
                <table cellpadding="0" cellspacing="0" width="100%%">
                  <tr>
                    <td style="padding: 10px 0 10px 0; font-family: Nunito, sans-serif; font-size: 20px; font-weight: 900">
                      Aktifkan Akun Caribi Anda
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td bgcolor="#fff">
                <table cellpadding="0" cellspacing="0" width="100%%">
                  <tr>
                    <td style="padding: 20px 0 20px 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Selamat datang, 
                      @if (isset(Auth::user()->fullname))
                        <span id="name">{{Auth::user()->fullname}}</span>
                      @endif
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Terima kasih telah mendaftar di Caribi. Mohon konfirmasi email ini untuk mengaktifkan akun Caribi Anda.
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 20px 0 20px 0; font-family: Nunito, sans-serif; font-size: 16px; text-align: center;">
                      <a href="{{$url}}" style="text-decoration: none; background-color: #3C78FF; border: none; color: white; padding: 15px 40px; text-align: center; display: inline-block; font-family: Nunito, sans-serif; font-size: 18px; font-weight: bold; cursor: pointer;">
                        Konfimasi Email
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Jika Anda kesulitan mengklik tombol "Konfirmasi Email", copy dan paste URL di bawah ke dalam browser Anda:
                      <a href="{{$url}}">{{$url}}</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 50px 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Regards,
                      <p>Caribi</p>
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

