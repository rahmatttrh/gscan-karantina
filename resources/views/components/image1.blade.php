<div class="modal modal-blur fade" id="modal-image" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full-width modal-dialog-centered " role="document">
        <div class="modal-content border">
        <div class="modal-header">
            <h5 class="modal-title text-secondary">Detail Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
           
            <ul class="tool-menu">

                <li class="tool-menu-item" id="btn-crop">Crop</li>
                <li class="tool-menu-item" id="btn-flip">Flip</li>
                <li class="tool-menu-item" id="btn-rotation">Rotation</li>
                <li class="tool-menu-item" id="btn-draw-line">DrawLine</li>
            </ul>

            <div class="tool-sub-menu-container" id="crop-sub-menu">
                <ul class="tool-menu">
                    <li class="tool-menu-item" id="btn-apply-crop">Apply</li>
                </ul>
            </div>

            <div class="tool-sub-menu-container" id="flip-sub-menu">
                <ul class="tool-menu">
                    <li class="tool-menu-item" id="btn-flip-x">FlipX</li>
                    <li class="tool-menu-item" id="btn-flip-y">FlipY</li>
                    <li class="tool-menu-item" id="btn-reset-flip">Reset</li>
                    <li class="tool-menu-item close">Close</li>
                </ul>
            </div>

            <div class="tool-sub-menu-container" id="rotation-sub-menu">
                <ul class="tool-menu">
                    <li class="tool-menu-item" id="btn-rotate-clockwise">Clockwise(30)</li>
                    <li class="tool-menu-item" id="btn-rotate-counter-clockwise">Counter-Clockwise(-30)</li>
                    <li class="tool-menu-item tool-no-pointer">
                    <label>
                        Range input
                        <input id="input-rotation-range" type="range" min="-360" value="0" max="360" />
                    </label>
                    </li>
                    <li class="tool-menu-item close">Close</li>
                </ul>
            </div>

            <div class="tool-sub-menu-container" id="rotation-sub-menu">
                <ul class="tool-menu">
                    <li class="tool-menu-item" id="btn-rotate-clockwise">Clockwise(30)</li>
                    <li class="tool-menu-item" id="btn-rotate-counter-clockwise">Counter-Clockwise(-30)</li>
                    <li class="tool-menu-item tool-no-pointer">
                    <label>
                        Range input
                        <input id="input-rotation-range" type="range" min="-360" value="0" max="360" />
                    </label>
                    </li>
                    <li class="tool-menu-item close">Close</li>
                </ul>
            </div>

            <div class="tool-sub-menu-container menu" id="draw-line-sub-menu">
                <ul class="tool-menu">
                    <li class="tool-menu-item">
                    <label>
                        <input type="radio" name="select-line-type" value="freeDrawing" checked="checked" />
                        Free drawing
                    </label>
                    <label>
                        <input type="radio" name="select-line-type" value="lineDrawing" />
                        Straight line
                    </label>
                    </li>
                    <li class="tool-menu-item">
                    <div id="tui-brush-color-picker">Brush color</div>
                    </li>
                    <li class="tool-menu-item">
                    <label class="tool-menu-item no-pointer">
                        Brush width
                        <input id="input-brush-width-range" type="range" min="5" max="30" value="12" />
                    </label>
                    </li>
                    <li class="tool-menu-item close">Close</li>
                </ul>
            </div>


            </div>
            <div class="editor" style="height: 60%"></div>
        </div>
        </div>
    </div>
</div>