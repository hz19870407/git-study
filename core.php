<?php

function get_curl_fun(){
	//��ʼ��
����$ch = curl_init();

����//����ѡ�����URL
����curl_setopt($ch, CURLOPT_URL, "http://www.jb51.net");
����curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
����curl_setopt($ch, CURLOPT_HEADER, 0);

����//ִ�в���ȡHTML�ĵ�����
����$output = curl_exec($ch);

����//�ͷ�curl���
����curl_close($ch);

����//��ӡ��õ�����
����print_r($output);
}
	