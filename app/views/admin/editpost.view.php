<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin">Blogy - Panel</a>
      </li>
      <li class="breadcrumb-item active">Ajouter un post</li>
    </ol>
    <div class="row">
      <div class="col-12">
        <h1>Ajouter un post</h1>
        <p>Vous pourrez modifier votre post en cas d'erreur plus tard depuis le Tableau de bord.</p>
      </div>
    </div>
    <form action="<?= HOST_NAME ?>admin/upost" method="post">
      <div class="form-group">
        <label for="Titre du post">Titre du post</label>
        <input type="text" class="form-control" id="tpost" name="tpost" placeholder="Mon nouveau post!" value="<?= htmlspecialchars($epost['titre_post']) ?>">
      </div>
      <div class="form-group">
        <label for="Contenu du post">Contenu du post</label>
        <tcontenu type="text" class="form-control" id="tcontenu" name="tcontenu" placeholder="">
        	<?= $epost['contenu_post'] ?>
      </div>
      <div class="form-group" style="display: none;">
        <label for="Titre du post">ID</label>
        <input type="text" class="form-control" id="idpost" name="idpost" placeholder="Mon nouveau post!" value="<?= htmlspecialchars($epost['ID']) ?>">
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
  
    
    
  <script>
    tinymce.init({ 
      selector: 'tcontenu',
      plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
      ],
      toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
      toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
      toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ],
      menubar: false,
      toolbar_items_size: 'small',
      valid_elements : "@[id|class|style|title|dir<ltr?rtl|lang|xml::lang],"
      + "a[rel|rev|charset|hreflang|tabindex|accesskey|type|"
      + "name|href|target|title|class],strong/b,em/i,strike,u,"
      + "#p[style],-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|"
      + "src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup,"
      + "-blockquote,-table[border=0|cellspacing|cellpadding|width|frame|rules|"
      + "height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|"
      + "height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,"
      + "#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor"
      + "|scope],#th[colspan|rowspan|width|height|align|valign|scope],caption,-div,"
      + "-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face"
      + "|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite],"
      + "object[classid|width|height|codebase|*],param[name|value|_value],embed[type|width"
      + "|height|src|*],map[name],area[shape|coords|href|alt|target],bdo,"
      + "button,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|"
      + "valign|width],dfn,fieldset,form[action|accept|accept-charset|enctype|method],"
      + "input[accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value],"
      + "kbd,label[for],legend,noscript,optgroup[label|disabled],option[disabled|label|selected|value],"
      + "q[cite],samp,select[disabled|multiple|name|size],small,"
      + "textarea[cols|rows|disabled|name|readonly],tt,var,big",
      protect: [
      /\<\/?(if|endif)\>/g,
      /\<xsl\:[^>]+\>/g,
      /<\?php.*?\?>/g
      ],
      init_instance_callback: function () {
        window.setTimeout(function() {
          $("#div").show();
         }, 1000);
      }
    });
  </script>
</div>