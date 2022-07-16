<?php
class Annocement{
    public function sendNormalMessage($msg,$title){
        return <<<HTML 
            <html>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">{title}</strong>
                    <small>11 мин. назад</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
                </div>
                <div class="toast-body">
                    {content}
                </div>
            </div>
            
    </html> HTML;
    }


}
?>
