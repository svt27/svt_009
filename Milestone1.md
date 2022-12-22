<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Shreya Thakkar (svt23)</td></tr>
<tr><td> <em>Generated: </em> 12/22/2022 10:01:29 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/svt23" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208929817-93a447d7-1b78-49c9-aae3-b0381dda7b4a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208930490-86642deb-8b77-4927-9e36-370e14cd74a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208930814-64aee841-3a02-4da5-9f20-41ff717f29cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords not much validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208938237-a2ec3dbc-90c0-4c8a-8a6a-3cda74fa9680.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208939816-c09a3f61-6614-4427-af62-3092a32dce61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username validation  not available <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208941924-b2d635c6-d2dd-412d-ad82-c5d58501d9e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208942713-efba5168-e56c-4476-8452-ffbf4d54b9fa.jpeg"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid user data in database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1f">https://github.com/svt27/svt_009/pull/1f</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <ol><li>Create html form with all input fields on frotnend then on submit button<br>form data is sent to backen</li><li>when data is receive on backend it validate<br>the data</li><li>in the from data there is 2 password field first match both<br>then first field bcrypted save in the db</li><li>Db is utilized ORM laravel<br></li></ol><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208955165-4b9a76fc-31e8-47f8-a2d9-70d7dedb500b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208955384-744c6a2b-abca-4a68-9ee1-1784759469d8.png,"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208958566-5422abfc-d972-4f35-9169-6021458ef5d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> screenshot of successful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <ol><li>Create html form with all input fields on frotnend then on submit button<br>form data is sent to backen</li><li>when data is receive on backend it validate<br>the data</li><li>in the from data there is 2 password field first match both<br>then first field bcrypted save in the db</li><li>Db is utilized ORM laravel</li></ol><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208958833-2f0897d3-9e4d-4d59-8374-5f28e484e246.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208963848-dfbcd8a0-de99-46b7-9164-1dada096e533.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> logged out user can&#39;t access a login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>middlewares added in the system which check every request for authentication and authorization<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208963848-dfbcd8a0-de99-46b7-9164-1dada096e533.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t access a login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208964128-cb7fd776-336c-47d7-88d4-8739f370072c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user without an appropriate role can&#39;t access the role-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208965139-912c9814-4e74-4de8-95a2-cdc04859f6ef.jpeg"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208965866-fe2b6ffb-bd50-4f4a-96e8-b7415c971cc6.jpeg"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles table with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>middlewares added in the system which check every request for authentication and authorization<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>middlewares added in the system which check every request for authentication and authorization<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208967181-ec441735-c4d0-4f17-a8d8-b4790228e98e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Navigation should be styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208967966-c10a2df6-7d84-46bb-a8ff-c38b7b2e9796.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Forms should be styled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Bootsrap 5 is used<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208968930-f0c06311-0474-4ad2-a023-a40f88f84a48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208969039-c65c7498-756f-40c6-b03c-c9a8614bbe4c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208969152-4001f30d-763d-46ba-90df-d5fa3726e91b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <div>Success message color is green</div><div>and error message color is red<br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208971369-0c553056-9675-4813-aa8b-c20274775a64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> User Profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>Same for used in profile page as register page, and get detail from<br>user session to fill values<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208972330-f893bf4b-9aa5-4ecc-832d-8d10567f52f8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208974060-5a3060fc-5b48-41b9-844b-c3266da02d40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208974310-6ed2c3d0-2eb2-4f1c-9d23-d7cecbf5deb0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot password mismatch message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208975038-958a9c27-a27e-493b-8ee9-b14c9802c02d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/89936955/208975350-e4e143c5-e283-4946-a493-89b361a756a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account is already in use ssssS<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209186757-e6c3b98c-9780-49a8-a10c-742b2eb66952.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before update<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209187090-07c29de0-0657-423a-ac60-d246450e2469.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after update<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/1">https://github.com/svt27/svt_009/pull/1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>in the case of update infromation. checked already existed data except self user<br>data and same for email<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209186757-e6c3b98c-9780-49a8-a10c-742b2eb66952.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>tet<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp.herokuapp.com/login">http://mybankapp.herokuapp.com/login</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp-prod.herokuapp.com/login">http://mybankapp-prod.herokuapp.com/login</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/svt23" target="_blank">Grading</a></td></tr></table>
