<?php

$name  = htmlspecialchars($_GET['name'] ?? '');
$phone = htmlspecialchars($_GET['phone'] ?? '');

?>

<!DOCTYPE html>
<html lang="es">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Gracias por su pedido</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      body {
         font-family: 'Montserrat', sans-serif;
         min-height: 100vh;
         background:
            radial-gradient(circle at top left, #22c55e20, transparent 30%),
            radial-gradient(circle at bottom right, #3b82f620, transparent 30%),
            linear-gradient(135deg, #f0fff4 0%, #eff6ff 100%);
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         overflow-x: hidden;
      }

      .wrapper {
         width: 100%;
         max-width: 760px;
      }

      .card {
         background: #fff;
         border-radius: 30px;
         padding: 55px 40px;
         box-shadow:
            0 10px 40px rgba(0, 0, 0, 0.08),
            0 2px 15px rgba(0, 0, 0, 0.04);
         position: relative;
         overflow: hidden;
      }

      .card::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 8px;
         background: linear-gradient(90deg, #16a34a, #22c55e, #4ade80);
      }

      .icon {
         width: 120px;
         height: 120px;
         margin: 0 auto 30px;
         border-radius: 50%;
         background: linear-gradient(135deg, #22c55e, #16a34a);
         display: flex;
         align-items: center;
         justify-content: center;
         box-shadow: 0 15px 35px rgba(34, 197, 94, 0.35);
      }

      .icon svg {
         width: 60px;
         height: 60px;
         fill: #fff;
      }

      h1 {
         text-align: center;
         font-size: 44px;
         line-height: 1.2;
         color: #111827;
         margin-bottom: 22px;
         font-weight: 800;
      }

      .subtitle {
         text-align: center;
         font-size: 18px;
         line-height: 1.8;
         color: #4b5563;
         margin-bottom: 40px;
      }

      .client-box {
         background: #f8fafc;
         border: 2px solid #e5e7eb;
         border-radius: 24px;
         padding: 30px;
         margin-bottom: 35px;
      }

      .client-row {
         display: flex;
         justify-content: space-between;
         align-items: center;
         gap: 20px;
         padding: 18px 0;
         border-bottom: 1px solid #e5e7eb;
      }

      .client-row:last-child {
         border-bottom: none;
      }

      .client-label {
         font-size: 14px;
         text-transform: uppercase;
         letter-spacing: 1px;
         color: #6b7280;
         font-weight: 700;
      }

      .client-value {
         font-size: 22px;
         color: #111827;
         font-weight: 700;
         text-align: right;
         word-break: break-word;
      }

      .notice {
         background: linear-gradient(135deg, #ecfdf5, #f0fdf4);
         border: 2px solid #bbf7d0;
         border-radius: 24px;
         padding: 30px;
         text-align: center;
         margin-bottom: 35px;
      }

      .notice-title {
         font-size: 28px;
         color: #166534;
         font-weight: 800;
         margin-bottom: 15px;
      }

      .notice-text {
         font-size: 18px;
         line-height: 1.8;
         color: #14532d;
      }

      .steps-title {
         text-align: center;
         font-size: 28px;
         font-weight: 800;
         color: #111827;
         margin-bottom: 28px;
      }

      .step {
         display: flex;
         gap: 18px;
         margin-bottom: 24px;
      }

      .step-number {
         width: 46px;
         height: 46px;
         min-width: 46px;
         border-radius: 50%;
         background: #22c55e;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: 800;
         font-size: 20px;
      }

      .step-text {
         font-size: 17px;
         line-height: 1.8;
         color: #374151;
         padding-top: 5px;
      }

      .footer {
         margin-top: 40px;
         text-align: center;
         font-size: 15px;
         line-height: 1.8;
         color: #6b7280;
      }

      @media(max-width:768px) {

         .card {
            padding: 40px 24px;
         }

         h1 {
            font-size: 34px;
         }

         .subtitle {
            font-size: 16px;
         }

         .client-row {
            flex-direction: column;
            align-items: flex-start;
         }

         .client-value {
            text-align: left;
            font-size: 19px;
         }

         .notice-title {
            font-size: 24px;
         }

      }
   </style>

   <?php if (!empty($fb_pixel_id)): ?>
   <!-- Meta Pixel Code -->
   <script>
      !function (f, b, e, v, n, t, s) {
         if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
         };
         if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
         n.queue = []; t = b.createElement(e); t.async = !0;
         t.src = v; s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
         'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo $fb_pixel_id; ?>');

      // Отправляем событие конверсии, например Lead:
      fbq('track', 'Lead');
   </script>
   <noscript>
      <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=<?php echo $fb_pixel_id; ?>&ev=Lead&noscript=1" />
   </noscript>
   <!-- End Meta Pixel Code -->
   <?php endif; ?>
</head>

<body>

   <div class="wrapper">

      <div class="card">

         <div class="icon">

            <svg viewBox="0 0 24 24">
               <path d="M9 16.2l-3.5-3.5L4 14.2l5 5 11-11-1.5-1.4z" />
            </svg>

         </div>

         <h1>
            ВЎGracias por su pedido!
         </h1>

         <div class="subtitle">
            Hemos recibido correctamente su solicitud.
            En breve nuestro especialista se pondrГЎ en contacto con usted para confirmar el pedido y СѓС‚РѕС‡nar todos
            los detalles.
         </div>

         <div class="client-box">

            <div class="client-row">

               <div class="client-label">
                  Cliente
               </div>

               <div class="client-value">
                  <?php echo $name; ?>
               </div>

            </div>

            <div class="client-row">

               <div class="client-label">
                  NГєmero de telГ©fono
               </div>

               <div class="client-value">
                  <?php echo $phone; ?>
               </div>

            </div>

         </div>

         <div class="notice">

            <div class="notice-title">
               Espere la llamada del operador
            </div>

            <div class="notice-text">
               Nuestro operador le llamarГЎ lo antes posible para confirmar su pedido y verificar todos los datos de
               entrega.
            </div>

         </div>

         <div class="steps-title">
            ВїQuГ© sucederГЎ ahora?
         </div>

         <div class="step">

            <div class="step-number">1</div>

            <div class="step-text">
               Su solicitud ya fue enviada correctamente al sistema.
            </div>

         </div>

         <div class="step">

            <div class="step-number">2</div>

            <div class="step-text">
               Un especialista revisarГЎ su pedido y prepararГЎ la confirmaciГіn.
            </div>

         </div>

         <div class="step">

            <div class="step-number">3</div>

            <div class="step-text">
               RecibirГЎ una llamada en breve para confirmar todos los detalles.
            </div>

         </div>

         <div class="footer">
            Gracias por confiar en nosotros.
            Trabajamos para brindarle la mejor calidad y atenciГіn.
         </div>

      </div>

   </div>

</body>

</html>