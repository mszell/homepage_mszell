  Normal_w = new Image(); 
  Normal_w.src = "grafics/button_weiter.gif"; /* Standard-Grafik Weiter-Button */
  Highlight_w = new Image(); 
  Highlight_w.src = "grafics/button_weiterhl.gif"; /* Highlight-Grafik Weiter-Button */
  Klick_w = new Image(); 
  Klick_w.src = "grafics/button_weiterc.gif"; /* Klick-Grafik Weiter-Button */

  Normal_z = new Image(); 
  Normal_z.src = "grafics/button_zurueck.gif"; /* Standard-Grafik Zurück-Button */
  Highlight_z = new Image(); 
  Highlight_z.src = "grafics/button_zurueckhl.gif"; /* Highlight-Grafik Zurück-Button */
  Klick_z = new Image(); 
  Klick_z.src = "grafics/button_zurueckc.gif"; /* Klick-Grafik Zurück-Button */

 function Bildwechsel(Bildnr,Bildobjekt)
  {
   window.document.images[Bildnr].src = Bildobjekt.src;
  }