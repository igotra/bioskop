
<!-- CONTAINER BODY -->    
            <div class="panel-group" >
				<div class="panel panel-default" >
					<div class="panel-body" >
						<h4>Register</h4>
						<hr/>
                        <?php 
                            $u = base_url();
                            echo "<form class='form-horizontal' role='form' enctype='multipart/form-data' method='post' action="."$u"."index.php/index/create_user".">";
                            ?>
							<div id='Username_register_div' class="form-group">
								<label class="control-label col-sm-2" for="text">Username:</label>
								<div class="col-sm-10">
                                  <?php
                                    $href= site_url('index/ajaxCheckUsername');
                                    echo "<input id='Username_register' href='"."$href"."' type='text' class='form-control' name='username' placeholder='Username'>";
                                  ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" name="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Password:</label>
								<div class="col-sm-10"> 
								  <input type="password" class="form-control" name="password" placeholder="Enter password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Confirm:</label>
								<div class="col-sm-10"> 
								  <input type="password" class="form-control" name="confirm" placeholder="Confirm password">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="input-group">
										<span class="input-group-btn">
											<span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Upload Picture</span>
                                            <input name="image" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
										</span>
										<span class="form-control"></span>
									</div>
								</div>
							</div>
							
							<div class="form-group"> 
                                <label class="control-label col-sm-2" for="notice">Zelim obavestenja:</label>
								<div class="col-sm-1"> 
								  <input type="checkbox" class="form-control" name="notice">
								</div>
							</div>
							  
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
                        
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php echo validation_errors('<p class="error">'); ?>
						</div>
                        
						<hr/>
					</div>
				</div>
			</div>
		</div>