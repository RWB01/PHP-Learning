<?php 
class View
{
    //public $template_view = 'template.tpl'; // ����� ����� ������� ����� ��� �� ���������.
    
    function generate($content_view, $data = null)
    {
		include 'C:/WebServers/home/hwwpv3.ru/www/application/views/configs/conf.php';
		$smarty = new smartyConnector();
        /*
        if(is_array($data)) {
            // ����������� �������� ������� � ����������
            extract($data);
        }
        */
		if ($data != null) {
			foreach ($data as $d) {
				$smarty->assign($d[1], $d[0]);
				//KEY => VAL
			}
		}
		
        $smarty->assign('content_view', $content_view);
		$smarty->display('template.tpl');
        //include 'application/views/'.$template_view;
    }
}
?>