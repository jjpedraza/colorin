# colorin
Funcion en PHP, para invocar un color hex o rgb, aleatorio o continuo

Puede invocarse, varias veces el color y dara uno de los que encuentre; de esta manera en tu diseño podras implementar todos los rosas u otro color de tu preferencia.
echo Colorin_Search('Rosa', "hex");
echo Colorin_Search('Rosa', "hex");

Puedes Tambien sacar un color aleatorio  Colorin_Rand() o  Colorin_Rand("rgb");


Incluso puedes combinar un rgba en un style, por ejemplo

echo "<div style='background-color:rgba(". Colorin_Search('Rosa', "rgb").",0.5);'">Info de tu Div, color especifico con una semitransparencia de 0.5</div>;
echo "<div style='background-color:rgba(". Colorin_Rand("rgb").",0.5);'">Info de tu div, con un color aleatorio y transparencia</div>;


Las implementaciones sera una cuestion de tu creatividad.

Recuerda que debes instanciarlo con require("colorin.php"); y listo


Espero te sirva este script, a mi me sirvio mucho en un trabajo que hice,
Buena Tarde, JJPedraza
