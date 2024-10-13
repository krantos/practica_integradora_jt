<style>
  /* body {
  margin: 0 auto;
  width: 600px;
  font-family: 'Dosis';
} */
  a {
    cursor: pointer;
  }

  #editor {
    box-shadow: 0 0 2px #CCC;
    min-height: 150px;
    overflow: auto;
    padding: 1em;
    margin-top: 20px;
    resize: vertical;
    outline: none;
  }

  .toolbar {
    text-align: center;
  }

  .toolbar a,
  .fore-wrapper,
  .back-wrapper {
    border: 1px solid #AAA;
    background: #FFF;
    font-family: 'Candal';
    border-radius: 1px;
    /* color: black; */
    padding: 5px;
    width: 1.5em;
    margin: -2px;
    margin-top: 10px;
    display: inline-block;
    text-decoration: none;
    box-shadow: 0px 1px 0px #CCC;
  }

  .toolbar a:hover,
  .fore-wrapper:hover,
  .back-wrapper:hover {
    background: #f2f2f2;
    border-color: #8c8c8c;
  }

  a[data-command='redo'],
  a[data-command='strikeThrough'],
  a[data-command='justifyFull'],
  a[data-command='insertOrderedList'],
  a[data-command='outdent'],
  a[data-command='p'],
  a[data-command='superscript'] {
    margin-right: 5px;
    border-radius: 0 3px 3px 0;
  }

  a[data-command='undo'],
  .fore-wrapper,
  a[data-command='justifyLeft'],
  a[data-command='insertUnorderedList'],
  a[data-command='indent'],
  a[data-command='h1'],
  a[data-command='subscript'] {
    border-radius: 3px 0 0 3px;
  }

  a.palette-item {
    height: 1em;
    border-radius: 3px;
    margin: 2px;
    width: 1em;
    border: 1px solid #CCC;
  }

  a.palette-item:hover {
    border: 1px solid #CCC;
    box-shadow: 0 0 3px #333;
  }

  .fore-palette,
  .back-palette {
    display: none;
  }

  .fore-wrapper,
  .back-wrapper {
    display: inline-block;
    cursor: pointer;
  }

  .fore-wrapper:hover .fore-palette,
  .back-wrapper:hover .back-palette {
    display: block;
    float: left;
    position: absolute;
    padding: 3px;
    width: 160px;
    background: #FFF;
    border: 1px solid #DDD;
    box-shadow: 0 0 5px #CCC;
    height: 70px;
  }

  .fore-palette a,
  .back-palette a {
    background: #FFF;
    margin-bottom: 2px;
  }
</style>
<div class="toolbar-{{ $n }}">
  <a href="#" data-command='bold'>Bold<i class='fa fa-bold'></i></a>
  <a href="#" data-command='justifyLeft'>Left<i class='fa fa-align-left'></i></a>
  <a href="#" data-command='justifyCenter'>Center<i class='fa fa-align-center'></i></a>
  <a href="#" data-command='justifyRight'>Right<i class='fa fa-align-right'></i></a>
  <a href="#" data-command='justifyFull'>Full<i class='fa fa-align-justify'></i></a>
  <a href="#" data-command='insertUnorderedList'>U-List<i class='fa fa-list-ul'></i></a>
  <a href="#" data-command='insertOrderedList'>O-List<i class='fa fa-list-ol'></i></a>
  <a href="#" data-command='p'>Paragraph<i class='fa fa-list-ol'></i></a>

</div>
<div id='editor' contenteditable>
  <h1>A WYSIWYG Editor.</h1>
  <p>Try making some changes here. Add your own text or maybe an image.</p>
</div>

<script>
  document.querySelectorAll('.toolbar-{{ $n }} a').forEach(a => a.addEventListener('click', function(e) {
    var command = e.target.getAttribute('data-command');
    var value = e.target.value;
    document.execCommand(command, false, null);
  }));
</script>