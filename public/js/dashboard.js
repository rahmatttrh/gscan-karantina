$(() => {

    let modal1Btn = $('#modal1-btn')
    let modal2Btn = $('#modal2-btn')
    let modal3Btn = $('#modal3-btn')
    let modal4Btn = $('#modal4-btn')
    let modal5Btn = $('#modal5-btn')
    let modal6Btn = $('#modal6-btn')
    let modal1 = $('#modal-image')

    var imageEditor = new tui.ImageEditor('.editor', {
        cssMaxWidth: 700,
        cssMaxHeight: 500,

        selectionStyle: {
            cornerSize: 20,
            rotatingPointOffset: 70,
        },
    });

    modal1Btn.click(async function (e) {
        
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    modal2Btn.click(async function (e) {
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    modal3Btn.click(async function (e) {
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    modal4Btn.click(async function (e) {
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    modal5Btn.click(async function (e) {
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    modal6Btn.click(async function (e) {
        e.preventDefault()
        
        let dataImage = $(this).data('image')
        await imageEditor.loadImageFromURL(dataImage, "SampleImage")
        modal1.modal('show')
    })

    
    // Crop submenu buttons
    let btnCrop = modal1.find('#btn-crop');
    let btnApplyCrop = modal1.find('#btn-apply-crop');
    let btnCancelCrop = modal1.find('#btn-cancel-crop');

    // Flip submenu buttons
    let btnFlip = modal1.find('#btn-flip');
    let btnFlipX = modal1.find('#btn-flip-x');
    let btnFlipY = modal1.find('#btn-flip-y');
    let btnResetFlip = modal1.find('#btn-reset-flip');

    // Rotate submenu buttons
    var btnRotation = modal1.find('#btn-rotation');
    var btnRotateClockwise = modal1.find('#btn-rotate-clockwise');
    var btnRotateCounterClockWise = modal1.find('#btn-rotate-counter-clockwise');
    var inputRotationRange = modal1.find('#input-rotation-range');
    var inputBrushWidthRange = modal1.find('#input-brush-width-range');
    // Draw submenu
    var btnDrawLine = modal1.find('#btn-draw-line');


    // Select line type
    var selectLine = modal1.find('[name="select-line-type"]');


    var brushColorpicker = tui.colorPicker.create({
        container: modal1.find('#tui-brush-color-picker')[0],
        color: '#000000',
      });

    function getBrushSettings() {
        var brushWidth = parseInt(inputBrushWidthRange.val(), 10);
        var brushColor = brushColorpicker.getColor();
      
        return {
          width: brushWidth,
          color: hexToRGBa(brushColor, 0.5),
        };
      }

      function hexToRGBa(hex, alpha) {
        var r = parseInt(hex.slice(1, 3), 16);
        var g = parseInt(hex.slice(3, 5), 16);
        var b = parseInt(hex.slice(5, 7), 16);
        var a = alpha || 1;
      
        return 'rgba(' + r + ',' + g + ',' + b + ',' + a + ')';
      }
      

    let btnClearObjects = modal1.find('#btn-clear-objects');

    let btnUndo = modal1.find('#btn-cancel-undo');

    // Submenus
    var displayingSubMenu = $();
    let cropSubMenu = modal1.find('#crop-sub-menu');
    let flipSubMenu = modal1.find('#flip-sub-menu');
    let rotationSubMenu =  modal1.find('#rotation-sub-menu');
    let drawLineSubMenu = $('#draw-line-sub-menu');


    function clearSubMenu(){
        cropSubMenu.hide()
    }

    function resizeEditor() {
        var editor = modal1.find('.editor');
        var container = modal1.find('.tui-image-editor-canvas-container');
        var height = parseFloat(container.css('max-height'));
        editor.height(height);
    }

    clearSubMenu()


    // Button Crop Function

    btnCrop.on('click', function () {
        imageEditor.startDrawingMode('CROPPER');
        displayingSubMenu.hide();
        displayingSubMenu = cropSubMenu.show();
    });

    btnApplyCrop.on('click', function () {
        imageEditor.crop(imageEditor.getCropzoneRect()).then(function () {
        imageEditor.stopDrawingMode();
        resizeEditor();
        });
    });
  
    btnCancelCrop.on('click', function () {
        imageEditor.stopDrawingMode();
    });

    // Button Flip Function

    btnFlip.on('click', function () {
        imageEditor.stopDrawingMode();
        displayingSubMenu.hide();
        displayingSubMenu = flipSubMenu.show();
    });

    btnFlipX.on('click', function () {
        imageEditor.flipX().then(function (status) {});
    });
    
    btnFlipY.on('click', function () {
        imageEditor.flipY().then(function (status) {});
    });
    
    btnResetFlip.on('click', function () {
        imageEditor.resetFlip().then(function (status) {});
    });

    // Button Rotate Function

    btnRotation.on('click', function () {
        imageEditor.stopDrawingMode();
        displayingSubMenu.hide();
        displayingSubMenu = rotationSubMenu.show();
    });

    btnRotateClockwise.on('click', function () {
        imageEditor.rotate(30);
    });
      
    btnRotateCounterClockWise.on('click', function () {
        imageEditor.rotate(-30);
    });
      
    inputRotationRange.on('mousedown', function () {
        var changeAngle = function () {
            imageEditor.setAngle(parseInt(inputRotationRange.val(), 10))['catch'](function () {});
        };
        (document).on('mousemove', changeAngle);
        (document).on('mouseup', function stopChangingAngle() {
            (document).off('mousemove', changeAngle);
            (document).off('mouseup', stopChangingAngle);
        });
    });
      
    inputRotationRange.on('change', function () {
        imageEditor.setAngle(parseInt(inputRotationRange.val(), 10))['catch'](function () {});
    });

    // Button Draw line
    btnDrawLine.on('click', function () {
        imageEditor.stopDrawingMode();
        displayingSubMenu.hide();
        displayingSubMenu = drawLineSubMenu.show();
        selectLine.eq(0).change();
      });
    

    selectLine.on('change', function () {
        var mode = $(this).val();
        var settings = getBrushSettings();
      
        imageEditor.stopDrawingMode();
        if (mode === 'freeDrawing') {
          imageEditor.startDrawingMode('FREE_DRAWING', settings);
        } else {
          imageEditor.startDrawingMode('LINE_DRAWING', settings);
        }
      });
      
    brushColorpicker.on('selectColor', function (event) {
        imageEditor.setBrush({
            color: hexToRGBa(event.color, 0.5),
        });
        });
  

  



    btnClearObjects.on('click', function () {
        clearSubMenu()
        imageEditor.clearObjects();
    });

    imageEditor.on({
        objectAdded: function (objectProps) {
          console.info(objectProps);
        },
        undoStackChanged: function (length) {
          if (length) {
            btnUndo.removeClass('disabled');
          } else {
            btnUndo.addClass('disabled');
          }
          resizeEditor();
        },
        redoStackChanged: function (length) {
          if (length) {
            btnRedo.removeClass('disabled');
          } else {
            btnRedo.addClass('disabled');
          }
          resizeEditor();
        },


      });
  

    
})