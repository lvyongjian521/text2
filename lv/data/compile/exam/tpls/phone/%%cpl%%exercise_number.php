                            <?php $qid = 0;
 foreach($this->tpl_var['questype'] as $key => $quest){ 
 $qid++; ?>
                            <li class="form-group">
                                <?php echo $quest['questype']; ?>（共<?php echo $this->tpl_var['numbers'][$quest['questid']]; ?>题），选 <input id="question_<?php echo $quest['questid']; ?>" size="5" type="text" name="args[number][<?php echo $quest['questid']; ?>]" rel="<?php echo $this->tpl_var['numbers'][$quest['questid']]; ?>" value="0"/> 题
                            </li>
                            <?php } ?>