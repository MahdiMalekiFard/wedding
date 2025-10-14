<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background-color: #f9f9f9; padding: 20px;">
    <div style="background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: #2c3e50; font-size: 28px; margin: 0; font-weight: 300;">🎉 Ny Reservationsforespørgsel</h1>
            <div style="height: 3px; background: linear-gradient(90deg, #e74c3c, #f39c12, #e74c3c); width: 100px; margin: 10px auto;"></div>
        </div>

        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 25px;">
            <h2 style="color: #34495e; font-size: 18px; margin: 0 0 15px 0; font-weight: 500;">📋 Reservationsdetaljer</h2>
            
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="border-bottom: 1px solid #e9ecef;">
                    <td style="padding: 12px 0; font-weight: 600; color: #495057; width: 140px;">👤 Navn:</td>
                    <td style="padding: 12px 0; color: #212529;">{{ $r->name }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e9ecef;">
                    <td style="padding: 12px 0; font-weight: 600; color: #495057;">📧 E-mail:</td>
                    <td style="padding: 12px 0; color: #212529;">
                        <a href="mailto:{{ $r->email }}" style="color: #007bff; text-decoration: none;">{{ $r->email }}</a>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #e9ecef;">
                    <td style="padding: 12px 0; font-weight: 600; color: #495057;">👥 Antal gæster:</td>
                    <td style="padding: 12px 0; color: #212529;">{{ $r->guest }} personer</td>
                </tr>
                <tr style="border-bottom: 1px solid #e9ecef;">
                    <td style="padding: 12px 0; font-weight: 600; color: #495057;">📅 Ønsket dato:</td>
                    <td style="padding: 12px 0; color: #212529; font-weight: 500;">
                        {{ $r->date->format('d. F Y') }}
                    </td>
                </tr>
                @if($r->description)
                <tr>
                    <td style="padding: 12px 0; font-weight: 600; color: #495057; vertical-align: top;">💬 Besked:</td>
                    <td style="padding: 12px 0; color: #212529; line-height: 1.6;">{{ $r->description }}</td>
                </tr>
                @endif
            </table>
        </div>

        <div style="background-color: #e8f5e8; padding: 15px; border-radius: 8px; border-left: 4px solid #28a745; margin-bottom: 20px;">
            <p style="margin: 0; color: #155724; font-weight: 500;">
                ⏰ <strong>Forespørgsel modtaget:</strong> {{ $r->created_at->format('d. F Y') }}
            </p>
        </div>

        <div style="text-align: center; padding: 20px 0; border-top: 1px solid #e9ecef;">
            <p style="color: #6c757d; font-size: 14px; margin: 0;">
                <strong>Næste skridt:</strong> Kontakt kunden inden for 24 timer for at bekræfte tilgængelighed og diskutere detaljer.
            </p>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $r->email }}&su=Svar på reservationsforespørgsel&body=Hej {{ $r->name }},%0D%0A%0D%0ATak for din reservationsforespørgsel for {{ $r->guest }} personer den {{ $r->date->format('d. F Y') }}.%0D%0A%0D%0AVi vil vende tilbage til dig snarest med information om tilgængelighed og priser.%0D%0A%0D%0AMed venlig hilsen,%0D%0A[Dit navn]" 
               style="background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; padding: 12px 30px; text-decoration: none; border-radius: 25px; font-weight: 600; display: inline-block;" 
               target="_blank">
                📧 Åbn i Gmail
            </a>
        </div>

    </div>
    
    <div style="text-align: center; margin-top: 20px; color: #6c757d; font-size: 12px;">
        <p>Denne e-mail blev automatisk genereret fra jeres hjemmeside.</p>
    </div>
</div>
