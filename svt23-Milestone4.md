<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Shreya Thakkar (svt23)</td></tr>
<tr><td> <em>Generated: </em> 12/23/2022 4:57:00 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-bank-project/grade/svt23" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209240876-15f665b7-aa87-4f1e-bd4d-8679e55424cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> transfer between their accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209240922-23cd9cac-8da3-4b5f-ab47-56583ffd9737.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing dropdown values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241016-d6dc017f-d347-45d3-9bcb-1554430dd37c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t transfer more funds<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241016-d6dc017f-d347-45d3-9bcb-1554430dd37c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t transfer to the same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241016-d6dc017f-d347-45d3-9bcb-1554430dd37c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>nagative account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241203-f0e828c5-f32d-4a21-93ab-715de7e55f5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction history from the db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241268-93796ba5-cb8e-4c79-b091-eb1daebeed2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts table showing both affected accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <ol><li>First i fetch all logged inn user accounts to show in from account<br>dropdown list then fetch all account list in the system.</li><li>Balance is fetch from<br>account column balanceInsert two records into the Transactions Table</li><li>Account A losing funds to<br>Account B</li><li>Account B gaining funds from Account A</li><li>Ensure each record includes the proper<br>balance_change, expected total, memo, the proper account ids (not account number), and the<br>proper account type</li></ol><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/9">https://github.com/svt27/svt_009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp-prod.herokuapp.com/transfers">http://mybankapp-prod.herokuapp.com/transfers</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241893-35ddbd1b-0e62-4639-b34a-4cb9b734f773.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> transaction history page showing the new transfer transaction<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209241893-35ddbd1b-0e62-4639-b34a-4cb9b734f773.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination search and page list dropdown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>For pagination i used database pluging<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/9">https://github.com/svt27/svt_009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to Transaction History page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp-prod.herokuapp.com/accounts/14">http://mybankapp-prod.herokuapp.com/accounts/14</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243619-02624747-c1b7-4305-b4ec-b548e4a430ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user&#39;s profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/9">https://github.com/svt27/svt_009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp-prod.herokuapp.com/profile">http://mybankapp-prod.herokuapp.com/profile</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243854-d5041978-c250-44fa-9376-adc1da387ad0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> external transfer page with filled in data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243942-89e74392-4407-4db0-9868-5c62fe1f275a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t send more than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243942-89e74392-4407-4db0-9868-5c62fe1f275a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>same error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243942-89e74392-4407-4db0-9868-5c62fe1f275a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> user doesn&#39;t exist and/or a d<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209244578-5cda0800-dabe-4913-b89b-918747655c8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ransactions table showing the recorded transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209244712-922a4f50-4cd7-42b2-8d5a-380717cea5d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated account balances<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>Form should include a dropdown of the current user’s accounts (as account_src)<br>Account list<br>should show account number and balance<br>Form should include a field for the destination<br>user’s last name<br>Form should include a field for the last 4 characters of<br>the destination user’s account number (to lookup account_dest)<br><br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/svt27/svt_009/pull/9">https://github.com/svt27/svt_009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to external transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://mybankapp-prod.herokuapp.com/transfers">http://mybankapp-prod.herokuapp.com/transfers</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/33340243/209243854-d5041978-c250-44fa-9376-adc1da387ad0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-bank-project/grade/svt23" target="_blank">Grading</a></td></tr></table>