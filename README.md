## Paletas de cores nos espaços HSL e HSV

Script em PHP para construção de tabelas em HTML de paletas de cores nos espaços HSL (hue, saturation, lightness) e HSV (hue, saturation, value).

### Espaços de cor:

O espaço de cor hue/saturation/lightness, ou, matiz/saturação/brilho, é um sistema de colorimetria para dimensionar uma cor por estas três propriedades. No HSL, o matiz é a cor pura numericamente ordenada em um círculo de cores de 360°. A saturação é o grau de pureza da cor pela mesclagem do matiz com a cor cinza, em uma escala de 0% (cinza) à 100% (pura). O brilho é a claridade da cor graduada do completamente enegrecido em 0% ao completamente embranquecido em 100%, deste modo, a cor pura está em 50% do brilho.

O espaço de cor hue/saturation/value, ou, matiz/saturação/valor, é um sistema de colorimetria para dimensionar uma cor por estas três propriedades. No HSV, o matiz é a cor pura numericamente ordenada em um círculo de cores de 360°. A saturação é o grau de pureza da cor pela mesclagem do matiz com a cor branca, em uma escala de 0% (branco) à 100% (pura). O valor é a claridade da cor graduada do completamente enegrecido em 0% ao completamente puro em 100%, deste modo, a cor pura está em 100% do valor.

### Algoritmo:

Estes algoritmos em PHP projetam os números na matiz (H) a cada 15°, os números na saturação (S) a cada 5% e os números no brilho/valor (L/V) a cada 5%. Convertendo para RGB e organizando em várias tabelas para cada posição na matiz. A conversão para RGB utiliza as funções deste repositório: [Conversão de espaço de cores RGB-HSL-HSV](https://github.com/danmadeira/conversao-rgb-hsl)

### Exemplos das tabelas:

Paleta HSL em 240°:

![HSL](img/hsl.png?raw=true)

Paleta HSV em 240°:

![HSV](img/hsv.png?raw=true)

### Referências:

- Ibraheem, N. A.; Hasan, M. M.; Khan, R. Z.; Mishra, P. K. Understanding Color Models: A Review. ARPN Journal of Science and Technology. vol. 2, no. 3, pp. 265-275. April 2012.

- Malacara, D. Color Vision and Colorimetry: Theory and Applications. 2nd ed. SPIE. Bellingham, Washington, USA. 2011.

- Schanda, J. Colorimetry: Understanding the CIE System. Wiley, 2007.

- Shevell, S. K. The Science of Color. Second Edition. Optical Society of America. Elsevier. 2003.
