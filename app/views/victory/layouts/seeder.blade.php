<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>

<table id="mytab1" bgcolor="#ffffff" border="2" height="358" width="100%" >


        <tbody>



          @include('victory.layouts.table')


        
        </tbody>

      
      </table>

      <div id="product"></div>

      <script>
      function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

      var pedigreeTitles = <?php echo json_encode([
            ['m', 'd'],
            ['mm', 'md', 'dm', 'dd'],
            ['mmm', 'mmd', 'mdm', 'mdd', 'dmm', 'dmd', 'ddm', 'ddd'],
            ['mmmm', 'mmmd', 'mmdm', 'mmdd', 'mdmm', 'mdmd', 'mddm', 'mddd', 'dmmm', 'dmmd', 'dmdm', 'dmdd', 'ddmm', 'ddmd', 'dddm', 'dddd']
    ]); ?>;

      var pedigree = [{},{},{}];
            var countFirst = 0;
            var countSecond = 0;
            var countThird = 0;
            var countFourth = 0;

      var table = document.getElementById("mytab1");
      for (var i = 0, row; row = table.rows[i]; i++) 
      {
         for (var j = 0, col; col = row.cells[j]; j++) 
         {
          if (i == 0 || i == 4) 
          {
            if (j == 0)
            {
              pedigree[0][pedigreeTitles[0][countFirst]] = col.innerText.replace(/'/g, "\\'");
              countFirst++;
            }
            else if (j == 1)
            {
              pedigree[1][pedigreeTitles[1][countSecond]] = col.innerText.replace(/'/g, "\\'");
              countSecond++;
            }
            else if (j == 2)
            {
              pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
              countThird++;
            }
          }
          else if (i%2 == 0)
          {
            if (j == 0)
            {
              pedigree[1][pedigreeTitles[1][countSecond]] = col.innerText.replace(/'/g, "\\'");
              countSecond++;
            }
            else if (j == 1)
            {
              pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
              countThird++;
            }
          }
          else
          {
            if (j == 0)
            {
              pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
              countThird++;
            }
          }



          // if (i == 0 || i == 8) 
          // {
          //   if (j == 0)
          //   {
          //     pedigree[0][pedigreeTitles[0][countFirst]] = col.innerText.replace(/'/g, "\\'");
          //     countFirst++;
          //   }
          //   else if (j == 1)
          //   {
          //     pedigree[1][pedigreeTitles[1][countSecond]] = col.innerText.replace(/'/g, "\\'");
          //     countSecond++;
          //   }
          //   else if (j == 2)
          //   {
          //     pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
          //     countThird++;
          //   }
          //   else if (j == 3)
          //   {
          //     pedigree[3][pedigreeTitles[3][countFourth]] = col.innerText.replace(/'/g, "\\'");
          //     countFourth++;
          //   }
          // }
          // else if (i%4 == 0)
          // {
          //   if (j == 0)
          //   {
          //     pedigree[1][pedigreeTitles[1][countSecond]] = col.innerText.replace(/'/g, "\\'");
          //     countSecond++;
          //   }
          //   else if (j == 1)
          //   {
          //     pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
          //     countThird++;
          //   }
          //   else if (j == 2)
          //   {
          //     pedigree[3][pedigreeTitles[3][countFourth]] = col.innerText.replace(/'/g, "\\'");
          //     countFourth++;
          //   }
          // }
          // else if (i%2 == 0)
          // {
          //   if (j == 0)
          //   {
          //     pedigree[2][pedigreeTitles[2][countThird]] = col.innerText.replace(/'/g, "\\'");
          //     countThird++;
          //   }
          //   else if (j == 1)
          //   {
          //     pedigree[3][pedigreeTitles[3][countFourth]] = col.innerText.replace(/'/g, "\\'");
          //     countFourth++;
          //   }
          // }
          // else
          // {
          //     pedigree[3][pedigreeTitles[3][countFourth]] = col.innerText.replace(/'/g, "\\'");
          //     countFourth++;
          // }
         }  
      }
      var outputPedigree = [];
      outputPedigree = outputPedigree.concat.apply(outputPedigree, pedigree);

      document.getElementById('product').innerHTML = JSON.stringify(outputPedigree);
      console.log(JSON.stringify(outputPedigree));
      </script>
  </body>
</html>