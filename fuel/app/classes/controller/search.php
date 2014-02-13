<?php
class Controller_Search extends Controller
{

	/**
	 * トップページ
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('search/index'));
	}
}
