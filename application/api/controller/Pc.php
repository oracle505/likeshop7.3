<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
namespace app\api\controller;
use app\api\logic\PcLogic;

class Pc extends ApiBase{
    public $like_not_need_login = ['index','commonData','goodsList'];
    /**
     * Notes: pc端首页接口
     * @author:  2021/3/5 12:00
     */
    public function index(){
        $lists = PcLogic::pcLists();
        return $this->_success('',$lists);
    }

    /**
     * Notes:pc广告公告数据
     * @author:  2021/3/5 18:00
     */
    public function commonData(){
        return $this->_success('',PcLogic::commonData($this->user_id));
    }

    /**
     * Notes:获取商品列表
     * @author:  2021/3/5 17:19
     */
    public function goodsList(){
        $type = $this->request->get('type',1);
        $sort_type = $this->request->get('sort_type','');
        $sort = $this->request->get('sort','');
        $name = $this->request->get('name','');
        $category_id = $this->request->get('category_id','');
        $list = PcLogic::goodsList($this->page_no,$this->page_size,$name,$category_id,$type,$sort_type,$sort);
        return $this->_success('',$list);

    }

    /**
     * Notes:修改用户信息
     * @author:  2021/3/8 19:07
     */
    public function changeUserInfo(){
        $post = $this->request->post();
        $post['user_id'] = $this->user_id;
        $result = $this->validate($post,'app\api\validate\ChangeUserInfo.pc');
        if(true === $result){
            PcLogic::changeUserInfo($post);
            return $this->_success('保存成功');
        }
        return $this->_error($result);
    }
}