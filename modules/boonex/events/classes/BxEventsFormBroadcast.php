<?php
/**
 *  
 *  
 */

bx_import('BxDolTwigFormBroadcast');

class BxEventsFormBroadcast extends BxDolTwigFormBroadcast
{
    function BxEventsFormBroadcast ()
    {
        parent::BxDolTwigFormBroadcast (_t('_bx_events_form_caption_broadcast_title'), _t('_bx_events_form_err_broadcast_title'), _t('_bx_events_form_caption_broadcast_message'), _t('_bx_events_form_err_broadcast_message'));
    }
}
