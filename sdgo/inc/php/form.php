<div id="wrapper">

<form class="container form_unit" action="search_v2" method="post">
  <table class="outer">
    <tr>
      <td localization TC="機體" SC="机体"></td>
    </tr>
    <tr>
      <td>
        <div class="container">
        <table class="inner">
          <tr>
            <td localization TC="名稱" SC="名称"></td>
            <td>
              <input type="text" name="name" value="" />
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="name" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="作品" SC="作品"></td>
            <td>
              <select name="origin">
                <option value=""></option>
<?=origin_option()?>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="origin" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="技能" SC="技能"></td>
            <td>
              <select name="skl">
                <option value=""></option>
                <option value="" disabled localization TC="分類" SC="分类" style='font-weight: bold;'></option>
                <option localization TC="　HP 85%以下時發動" SC="　HP 85%以下时发动" value="HP%85%以下時發動"></option>
                <option localization TC="　HP 80%以下時發動" SC="　HP 80%以下时发动" value="HP%80%以下時發動"></option>
                <option localization TC="　HP 75%以下時發動" SC="　HP 75%以下时发动" value="HP%75%以下時發動"></option>
                <option localization TC="　HP 70%以下時發動" SC="　HP 70%以下时发动" value="HP%70%以下時發動"></option>
                <option localization TC="　HP 60%以下時發動" SC="　HP 60%以下时发动" value="HP%60%以下時發動"></option>
                <option localization TC="　HP 55%以下時發動" SC="　HP 55%以下时发动" value="HP%55%以下時發動"></option>
                <option localization TC="　HP 50%以下時發動" SC="　HP 50%以下时发动" value="HP%50%以下時發動"></option>
                <option localization TC="　HP 45%以下時發動" SC="　HP 45%以下时发动" value="HP%45%以下時發動"></option>
                <option localization TC="　HP 40%以下時發動" SC="　HP 40%以下时发动" value="HP%40%以下時發動"></option>
                <option localization TC="　HP 35%以下時發動" SC="　HP 35%以下时发动" value="HP%35%以下時發動"></option>
                <option localization TC="　HP 30%以下時發動" SC="　HP 30%以下时发动" value="HP%30%以下時發動"></option>
                <option localization TC="　攻擊力" SC="　攻击力" value="攻擊力"></option>
                <option localization TC="　攻擊速度" SC="　攻击速度" value="攻擊速度"></option>
                <option localization TC="　射程距離" SC="　射程距离" value="射程距離"></option>
                <option localization TC="　防禦力" SC="　防御力" value="防禦力"></option>
                <option localization TC="　機動力" SC="　机动力" value="機動力"></option>
                <option localization TC="　敏捷" SC="　敏捷" value="敏捷"></option>
                <option localization TC="　移動速度" SC="　移动速度" value="移動速度"></option>
                <option localization TC="　衝刺速度" SC="　冲刺速度" value="衝刺速度"></option>
                <option localization TC="　推進量" SC="　推进量" value="推進量"></option>
                <option localization TC="　回復時間" SC="　回复时间" value="回復時間"></option>
                <option localization TC="　裝填時間" SC="　装填时间" value="裝填時間"></option>
                <option localization TC="　發動機率　近戰傷害" SC="　发动机率　近战伤害" value="發動機率%近戰傷害"></option>
                <option localization TC="　SP傷害" SC="　SP伤害" value="SP傷害"></option>
                <option localization TC="　SP積蓄速度" SC="　SP积蓄速度" value="SP積蓄速度"></option>
                <option localization TC="　雷達顯示敵軍" SC="　雷达显示敌军" value="雷達顯示敵軍"></option>
                <option localization TC="　格鬥反擊" SC="　格斗反击" value="格鬥反擊"></option>
                <option localization TC="　免疫所有異常狀態" SC="　免疫所有异常状态" value="免疫所有異常狀態"></option>
                <option localization TC="　敵軍對自機鎖定無效" SC="　敌军对自机锁定无效" value="敵軍對自機鎖定無效"></option>
                <option localization TC="　受到的傷害" SC="　受到的伤害" value="受到的傷害"></option>
                <option localization TC="　受到實彈造成的傷害" SC="　受到实弹造成的伤害" value="受到實彈%成的傷害"></option>
                <option localization TC="　受到光束造成的傷害" SC="　受到光束造成的伤害" value="受到光束%成的傷害"></option>
                <option localization TC="　所有攻擊會造成最大傷害" SC="　所有攻击会造成最大伤害" value="所有攻擊會%成最大傷害"></option>
                <option value="" disabled localization TC="--------------------------------------------------" SC="--------------------------------------------------" style='font-weight: bold;'></option>
                <option value="" disabled localization TC="所有技能" SC="所有技能" style='font-weight: bold;'></option>
    <?=skl_option()?>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="skl" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="必殺" SC="必杀"></td>
            <td>
              <select name="sp">
                <option value=""></option>
                <option value="012" localization TC="亂舞型" SC="乱舞型"></option>
                <option value="013" localization TC="全彈發射型" SC="全弹发射型"></option>
                <option value="014" localization TC="地圖炮型" SC="地图炮型"></option>
                <option value="231" localization TC="突撃型" SC="突击型"></option>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="sp" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="等級" SC="等级"></td>
            <td class="width-99">
              <select name="rank">
                <option value="" localization TC="" SC=""></option>
                <option value="S%" localization TC="全S" SC="全S" style='font-weight: bold;'></option>
                <option value="SS" localization TC="　SS" SC="　SS"></option>
                <option value="SR" localization TC="　SR" SC="　SR"></option>
                <option value="S" localization TC="　S" SC="　S"></option>
                <option value="A%" localization TC="全A" SC="全A" style='font-weight: bold;'></option>
                <option value="AS" localization TC="　AS" SC="　AS"></option>
                <option value="AR" localization TC="　AR" SC="　AR"></option>
                <option value="A" localization TC="　A" SC="　A"></option>
                <option value="B%" localization TC="全B" SC="全B" style='font-weight: bold;'></option>
                <option value="BS" localization TC="　BS" SC="　BS"></option>
                <option value="BR" localization TC="　BR" SC="　BR"></option>
                <option value="B" localization TC="　B" SC="　B"></option>
                <option value="BU" localization TC="　BU" SC="　BU"></option>
                <option value="C%" localization TC="全C" SC="全C" style='font-weight: bold;'></option>
                <option value="CS" localization TC="　CS" SC="　CS"></option>
                <option value="CR" localization TC="　CR" SC="　CR"></option>
                <option value="C" localization TC="　C" SC="　C"></option>
                <option value="CU" localization TC="　CU" SC="　CU"></option>
                <option value="" localization TC="其他" SC="其他" disabled style='font-weight: bold;'></option>
                <option value="SABC" localization TC="　全NORMAL" SC="　全NORMAL"></option>
                <option value="_S" localization TC="　全SECRET" SC="　全SECRET"></option>
                <option value="_R" localization TC="　全RARE" SC="　全RARE"></option>
                <option value="_U" localization TC="　全U" SC="　全U"></option>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="rank" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="距離" SC="距离"></td>
            <td class="width-99">
              <select name="pos">
                <option value=""></option>
                <option value="r" localization TC="近" SC="近"></option>
                <option value="s" localization TC="中" SC="中"></option>
                <option value="p" localization TC="遠" SC="远"></option>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="pos" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="變型" SC="变型"></td>
            <td class="width-99">
              <select name="tag">
                <option value=""></option>
                <option value="2" localization TC="自由" SC="自由"></option>
                <option value="3" localization TC="裝甲解除" SC="装甲解除"></option>
                <option value="4" localization TC="技能激活" SC="技能激活"></option>
                <option value="0" localization TC="不能" SC="不能"></option>
              </select>
            <!--/td>
            <td class="width-1"-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="tag" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
        </table>
        </div>
        <div class="container">
        <table class="inner">
          <tr>
            <td localization TC="武器" SC="武器"></td>
            <td>
              <select name="wpn">
                <option value=""></option>
<!--?=wpn_option()?-->
                <option localization="" tc="類別" sc="类别" value="" disabled style="font-weight:bold;"></option>
                <option localization="" tc="　短距" sc="　短距" value="s"></option>
                <option localization="" tc="　中距" sc="　中距" value="m"></option>
                <option localization="" tc="　遠距" sc="　远距" value="l"></option>
                <option localization="" tc="　浮游" sc="　浮游" value="f"></option>
                
                <option localization="" tc="近武" sc="近武" value="a" style="font-weight:bold;"></option>
                  <option localization="" tc="　格鬥" sc="　格斗" value="1"></option>
                  <option localization="" tc="　斧" sc="　斧" value="2"></option>
                  <option localization="" tc="　光束軍刀" sc="　光束军刀" value="3"></option>
                  <option localization="" tc="　實體刀" sc="　实体刀" value="4"></option>
                  <option localization="" tc="　斬" sc="　斩" value="6"></option>
                  <option localization="" tc="　熱能鞭[連擊組合]" sc="　热能鞭[连击组合]" value="11"></option>
                  <option localization="" tc="　火箭錨[連擊組合]" sc="　火箭锚[连击组合]" value="12"></option>
                  <option localization="" tc="　特效彈藥" sc="　特效弹药" value="15"></option>
                  <option localization="" tc="　浮游劍[連射]" sc="　浮游剑[连射]" value="26"></option>
                
                <option localization="" tc="實彈" sc="实弹" value="b" style="font-weight:bold;"></option>
                  <option localization="" tc="　擊" sc="　击" value="5"></option>
                  <option localization="" tc="　飛鏢" sc="　飞镖" value="13"></option>
                  <option localization="" tc="　劍氣" sc="　剑气" value="14"></option>
                  <option localization="" tc="　拳" sc="　拳" value="16"></option>
                  <option localization="" tc="　火神炮[連射]" sc="　火神炮[连射]" value="22"></option>
                  <option localization="" tc="　狀態彈" sc="　状态弹" value="23"></option>
                  <option localization="" tc="　浮游導彈[連射]" sc="　浮游导弹[连射]" value="28"></option>
                  <option localization="" tc="　機關槍[連射]" sc="　机关枪[连射]" value="33"></option>
                  <option localization="" tc="　火箭炮" sc="　火箭炮" value="34"></option>
                  <option localization="" tc="　擴散炮[擴散]" sc="　扩散炮[扩散]" value="35"></option>
                  <option localization="" tc="　飛彈[連射]" sc="　飞弹[连射]" value="36"></option>
                  <option localization="" tc="　羽毛[連射]" sc="　羽毛[连射]" value="37"></option>
                  <option localization="" tc="　線性步槍[濺射]" sc="　线性步枪[溅射]" value="38"></option>
                  <option localization="" tc="　加農炮" sc="　加农炮" value="41"></option>
                
                <option localization="" tc="光束" sc="光束" value="c" style="font-weight:bold;"></option>
                  <option localization="" tc="　光束擴散炮" sc="　光束扩散炮" value="21"></option>
                  <option localization="" tc="　浮游炮" sc="　浮游炮" value="25"></option>
                  <option localization="" tc="　反射元件" sc="　反射元件" value="27"></option>
                  <option localization="" tc="　噴槍" sc="　喷枪" value="31"></option>
                  <option localization="" tc="　光束步槍" sc="　光束步枪" value="32"></option>
                  <option localization="" tc="　格林機槍[連射]" sc="　格林机枪[连射]" value="39"></option>
                  <option localization="" tc="　超視炮" sc="　超视炮" value="42"></option>
                  <option localization="" tc="　狙擊槍" sc="　狙击枪" value="43"></option>
                
              </select>
            <!--/td>
            <td-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="wpn" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td localization TC="效果" SC="效果"></td>
            <td>
              <select name="eff">
                <option value=""></option>
<?=eff_option()?>
              </select>
            <!--/td>
            <td-->
              <label class="not" localization TC="點後篩選不符合左方條件" SC="点后筛选不符合左方条件">
                <input type="checkbox" name="not[]" value="eff" /><span localization TC="×" SC="×"></span>
              </label>
            </td>
          </tr>
          <tr id="prop">
            <td localization TC="特殊" SC="特殊"></td>
            <td colspan="2" style="height: calc(100% / 7 * 5);">
                <label>
                  <input name="prop[]" value="ma" type="checkbox" />
                  <span localization TC="MA" SC="MA"></span>
                </label>
                <label>
                  <input name="prop[]" value="nma" type="checkbox" />
                  <span localization TC="×MA" SC="×MA"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="ca" type="checkbox" />
                  <span localization TC="格鬥反擊" SC="格斗反击"></span>
                </label>
                <label>
                  <input name="prop[]" value="nca" type="checkbox" />
                  <span localization TC="×格鬥反擊" SC="×格斗反击"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="big" type="checkbox" />
                  <span localization TC="大型" SC="大型"></span>
                </label>
                <label>
                  <input name="prop[]" value="nbig" type="checkbox" />
                  <span localization TC="×大型" SC="×大型"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="tiny" type="checkbox" />
                  <span localization TC="小型" SC="小型"></span>
                </label>
                <label>
                  <input name="prop[]" value="ntiny" type="checkbox" />
                  <span localization TC="×小型" SC="×小型"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="s" type="checkbox" />
                  <span localization TC="盾牌" SC="盾牌"></span>
                </label>
                <label>
                  <input name="prop[]" value="ns" type="checkbox" />
                  <span localization TC="×盾牌" SC="×盾牌"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="s2" type="checkbox" />
                  <span localization TC="光束盾" SC="光束盾"></span>
                </label>
                <label>
                  <input name="prop[]" value="ns2" type="checkbox" />
                  <span localization TC="×光束盾" SC="×光束盾"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="bp" type="checkbox" />
                  <span localization TC="設計圖" SC="设计图"></span>
                </label>
                <label>
                  <input name="prop[]" value="nbp" type="checkbox" />
                  <span localization TC="×設計圖" SC="×设计图"></span>
                </label>
                <br>
                <label>
                  <input name="prop[]" value="cm" type="checkbox" />
                  <span localization TC="扭蛋" SC="扭蛋"></span>
                </label>
                <label>
                  <input name="prop[]" value="ncm" type="checkbox" />
                  <span localization TC="×扭蛋" SC="×扭蛋"></span>
                </label>
            </td>
          </tr>
        </table>
        </div>
        <div class="container">
        <table class="inner">
          <tr id="sort">
            <td localization TC="排序" SC="排序"></td>
            <td>
              <select name="sort">
                <option value="tot" localization TC="六圍" SC="六围" style='font-weight: bold;'></option>
                <option value="hp" localization TC="　血量" SC="　血量"></option>
                <option value="atk" localization TC="　攻擊" SC="　攻击"></option>
                <option value="def" localization TC="　防禦" SC="　防御"></option>
                <option value="agi" localization TC="　敏捷" SC="　敏捷"></option>
                <option value="spd" localization TC="　速度" SC="　速度"></option>
                <option value="spdmg" localization TC="　必殺" SC="　必杀"></option>
                <option value="id" localization TC="ID" SC="ID" style='font-weight: bold;'></option>
                <option value="lock" localization TC="鎖敵距離" SC="锁敌距离" style='font-weight: bold;'></option>
              </select>
            </td>
          </tr>
          <tr>
            <td localization TC="次序" SC="次序"></td>
            <td>
              <select name="order">
                <option value="DESC" localization TC="降序" SC="降序"></option>
                <option value="ASC" localization TC="升序" SC="升序"></option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="height: calc(100% - 100% / 7 * 2 - 50%);">
              <input type="button" value="" localization TC="重置" SC="重置" onclick="resetform()" />
            </td>
          </tr>
          <tr>
            <td colspan="2" style="height: 50%;">
              <input type="submit" value="" localization TC="搜尋" SC="搜寻" />
            </td>
          </tr>
        </table>
        </div>
      </td>
    </tr>
  </table>
</form>

<form class="container form_cm" method="get">
  <table class="outer">
    <tr>
      <td localization TC="扭蛋機" SC="扭蛋机"></td>
    </tr>
    <tr>
      <td>
        <div class="container">
        <table class="inner">
          <tr>
            <td style="height: 50%;">
              <select name="machine" style="height: 100%;">
<?=cm_option()?>
              </select>
            </td>
          </tr>
          <tr>
            <td style="height: 50%;">
              <input type="submit" value="" localization TC="搜尋" SC="搜寻" style="height: 100%; width: 100%;" />
            </td>
          </tr>
        </table>
        </div>
      </td>
    </tr>
  </table>
</form>

</div>