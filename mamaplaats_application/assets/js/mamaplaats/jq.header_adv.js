var twin = top, grpvar = '_ASGRPID_' + '1594'.replace('.', ''), grpId = Math.round(Math.random() * 0xFFFFFF);
try {
    if (typeof(twin[grpvar]) == 'undefined') {
        twin[grpvar] = grpId;
    }
} catch (e) {
    twin = self;
}
if (typeof(twin[grpvar]) == 'undefined') {
    twin[grpvar] = grpId;
} else {
    grpId = twin[grpvar];
}
document.write('<scr' + 'ipt language="javascript1.1" src="http://adserver.adtech.de/addyn/3.0/1594/5712115/0/225/ADTECH;loc=100;target=_blank;grp=' + grpId + ';misc=' + new Date().getTime() + '"></scri' + 'pt>');