---
navbar: true
layout: HomeLayout
home: true
# heroImage: http://cominex.net/assets/img/logos/storybook.png
# heroImage: /cominex-logo.png
heroText: ~/frontier
# tagline: An opinionated and ever-evolving, platform-agnostic toolkit for rapidly prototyping and documenting user interface ideas
# tagline: To inspire and facilitate radical generosity
tagline: Templates built on top of Bootstrap, Vue.js, React, Angular, Node.js and Laravel.
author: Victor
actionText: Get Started →
actionLink: /guide/
features:
- title: Steal Like an Artist
  details:
    - Steal Like an Artist
    - Don't Wait Until You Know Who You Are To Get Started
    - Write the Book You Want to Read
    - Use Your Hands
    - Side Projects and Hobbies are Important
    - The Secret -- Do Good Work and Share it with People
    - Geography is no Longer our Master
    - Be Nice
    - Be Boring
    - Creativity is Subtraction
- title: Show Your Work
  details:
    - You Don't Have to Be a Genius
    - Think Process, Not Product
    - Share Something Small Every Day
    - Open Up Your Cabinet of Curiosities
    - Tell Good Stories
    - Teach What You Know
    - Don't Turn Into Human Spam
    - Learn To Take A Punch
    - Sell Out
    - Stick Around
- title: Keep Going
  details:
    - Every Day is Grounhog Day
    - Build a Bliss Station
    - Forget the Noun, Do the Verb
    - Make Gifts
    - The Ordinary + Extra Attention = The Extraordinary
    - Slay the Art Monsters
    - You are Allowed to Change Your Mind
    - When in Doubt, Tidy Up
    - Demons Hate Fresh Air
    - Plant Your Garden
# footer: Copyright © 2020-present Booster Tech Team
---

# {{ $page.title }}

Welcome to {{ $site.title }}! My name is {{ $page.author }} and I'll be your guide for today!


directgive.boosterthon.com/custom

<a href="https://app.netlify.com/start/deploy?repository=https://github.com/victortolbert/frontier" target="_blank" rel="noopener noreferrer"><img src="https://www.netlify.com/img/deploy/button.svg" alt="Deploy to Netlify"></a>

## Typographic replacements

![Caption](/design-system.png)

Enable typographer option to see result.

(c) (C) (r) (R) (tm) (TM) (p) (P) +-

test.. test... test..... test?..... test!....

!!!!!! ???? ,,  -- ---

"Smartypants, double quotes" and 'single quotes'


_This is italic text_

~~Strikethrough~~


## Blockquotes


> Blockquotes can also be nested...
>> ...by using additional greater-than signs right next to each other...
> > > ...or with spaces between arrows.


## Lists

Unordered

+ Create a list by starting a line with `+`, `-`, or `*`
+ Sub-lists are made by indenting 2 spaces:
  - Marker character change forces new list start:
    * Ac tristique libero volutpat at
    + Facilisis in pretium nisl aliquet
    - Nulla volutpat aliquam velit
+ Very easy!

Ordered

1. Lorem ipsum dolor sit amet
2. Consectetur adipiscing elit
3. Integer molestie lorem at massa


1. You can use sequential numbers...
1. ...or keep all the numbers as `1.`

Start numbering with offset:

57. foo
1. bar


## Code

Inline `code`

Indented code

    // Some comments
    line 1 of code
    line 2 of code
    line 3 of code


Block code "fences"

```
Sample text here...
```

Syntax highlighting

``` js
var foo = function (bar) {
  return bar++;
};

console.log(foo(5));
```

## Tables

| Option | Description |
| ------ | ----------- |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |

Right aligned columns

| Option | Description |
| ------:| -----------:|
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |


## Links

[link text](http://dev.nodeca.com)

[link with title](http://nodeca.github.io/pica/demo/ "title text!")

Autoconverted link https://github.com/nodeca/pica (enable linkify to see)


## Images

![Minion](https://octodex.github.com/images/minion.png)
![Stormtroopocat](https://octodex.github.com/images/stormtroopocat.jpg "The Stormtroopocat")

Like links, Images also have a footnote style syntax

![Alt text][id]

With a reference later in the document defining the URL location:

[id]: https://octodex.github.com/images/dojocat.jpg  "The Dojocat"


## Plugins

The killer feature of `markdown-it` is very effective support of
[syntax plugins](https://www.npmjs.org/browse/keyword/markdown-it-plugin).


### [Emojies](https://github.com/markdown-it/markdown-it-emoji)

> Classic markup: :wink: :crush: :cry: :tear: :laughing: :yum:
>
> Shortcuts (emoticons): :-) :-( 8-) ;)

see [how to change output](https://github.com/markdown-it/markdown-it-emoji#change-output) with twemoji.


### [Subscript](https://github.com/markdown-it/markdown-it-sub) / [Superscript](https://github.com/markdown-it/markdown-it-sup)

- 19^th^
- H~2~O


++Inserted text++


==Marked text==


### [Footnotes](https://github.com/markdown-it/markdown-it-footnote)

Footnote 1 link[^first].

Footnote 2 link[^second].

Inline footnote^[Text of inline footnote] definition.

Duplicated footnote reference[^second].

[^first]: Footnote **can have markup**

    and multiple paragraphs.

[^second]: Footnote text.


### [Definition lists](https://github.com/markdown-it/markdown-it-deflist)

Term 1

:   Definition 1
with lazy continuation.

Term 2 with *inline markup*

:   Definition 2

        { some code, part of Definition 2 }

    Third paragraph of definition 2.

_Compact style:_

Term 1
  ~ Definition 1

Term 2
  ~ Definition 2a
  ~ Definition 2b


### [Abbreviations](https://github.com/markdown-it/markdown-it-abbr)

This is HTML abbreviation example.

It converts "HTML", but keep intact partial entries like "xxxHTMLyyy" and so on.

*[HTML]: Hyper Text Markup Language

### [Custom containers](https://github.com/markdown-it/markdown-it-container)

::: warning
*here be dragons*
:::


168839090_vuex_modules
https://github.com/Boosterthon/titan-dashboard/commit/b696f99

```diff
classroomsByGrade () {
-  return this.school.classrooms
-    .filter(classroom => !classroom.deleted)
-    .reduce((classrooms, classroom) => {
-        let grade = (classroom.grade.id > 0) ? `${classroom.grade.name} Grade` : classroom.grade.name;
-        if (!classrooms[grade]) {
-            classrooms[grade] = [];
-        }
-        classrooms[grade].push(classroom);
-        return classrooms;
-    }, {});
+  return this.$store.getters.classroomsByGrade;
},
```

[[toc]]

## HowToGetPledges

```diff
firstParticipantId () {
  return this.program.participants[0].id
  return this.$store.getters.participantsByProgramId(this.program.id)[0].id
}
```

## ParentDashboardAccordion

```diff
<component
+   v-if="item.name === 'PledgeInfo'"
+   :is="item.name"
+   :pledges="pledges"
+   :unit="program.unit"
+   :unit_range_low="program.unit_range_low"
+   :unit_range_high="program.unit_range_high"
+ />
+ <component
+  v-else
```

```diff
- data () {
-       return {
-           items: [
+   computed: {
+       items () {
+           return [
```

```diff
participants () {
  return this.$store.getters.participantsByProgramId(this.program.id)
},
pledges () {
  return this.participants[0].participant_info.pledges
}
```

```diff
pledgesCount () {
-  return new Set(this.program.participants
-    .map(participant => participant.participant_info.pledges.map(pledge => pledge.family_pledge_id || pledge.id))
-    .flat(1)).size
+  return this.pledges.length
},
```

## PledgeInfo
```diff
props: {
-   program: {
-       type: Object,
-       default: null
-   }
+   pledges: {
+       type: Array,
+       default: () => []
+  }
}
```

```diff
hasPaidAllPledges () {
-   return this.program.participants
-     .map(participant => participant.participant_info.pledges.map(pledge => pledge.pledge_status_id))
-     .flat(1)
-     .every((pledgeStatusId) => this.pledgeStatusIdsWithPayment.includes(pledgeStatusId));
+   return this.$store.getters.hasPaidAllPledges(this.pledges);
},
```


```diff
- pledges () {
-   let pledges = this.program.participants
-     .map(this.mapPledgesWithParticipant)
-     .flat(1)
-     .reduce(this.groupByFamilyPledgeId, {})
-   return this.convertObjectToArray(pledges)
-     .sort(this.sortByDate)
+ program () {
+   return this.$store.getters.pledgeProgram(this.pledges[0][0])
}
```

```diff
- mapPledgesWithParticipant (participant) {
-   return participant.participant_info.pledges.map((pledge) => {
-       pledge.participant = participant;
-       return pledge;
-   });
- },
- convertObjectToArray (object) {
-   return Object.entries(object).map(entry => entry[1]);
- },
- groupByFamilyPledgeId (pledges, pledge) {
-   let id = pledge.family_pledge_id || pledge.id;
-   pledges[id] = pledges[id] || [];
-   pledges[id].push(pledge);
-   return pledges;
- },
- sortByDate (pledgesA, pledgesB) {
-   return new Date(pledgesA[0].ts_entered) - new Date(pledgesB[0].ts_entered);
- },
```

```diff
payPledges () {
  this.gaEvent('Parent Dashboard', 'Pledges', 'Pay Pledges')
+ },
+ removePledge (pledgeId) {
+   this.$store.dispatch('deletePledge', pledgeId)
}
```

```diff
- <div>{{ pledge.participant.first_name }}</div>
+ <div>{{ pledgeParticipant(pledge).first_name }}</div>
```

```diff
<span
-   v-if="pledge.pledge_type_id === 1"
- >{{ program.unit.modifier }} {{ program.unit.name }}</span>
+   v-if="pledge.pledge_type_id === $store.getters.ppuPledgeTypeId"
+ >{{ unit.modifier }} {{ unit.name }}</span>
```
```diff
  props: {
    pledges: {
      type: Array,
-     default: null
+     default: () => []
    },
-   program: {
+   unit: {
      type: Object,
-     default: null
+     default: () => {}
+   },
+   unit_range_low: {
+     type: Number,
+     default: 30
+   },
+   unit_range_high: {
+     type: Number,
+     default: 35
+   }
  },
```

```diff
pledgeTotal () {
-   let totals = this.pledges.reduce(
-       (totals, pledge) => {
-           if (pledge.pledge_type_id === 1) {
-               totals.low += pledge.amount * this.program.unit_range_low;
-               totals.high += pledge.amount * this.program.unit_range_high;
-           } else {
-               totals.low += pledge.amount;
-               totals.high += pledge.amount;
-           }
-           return totals;
-       },
-       { low: 0, high: 0 }
-   );
-   let totalsString = totals.low;
-   if (totals.low !== totals.high) {
-       totalsString += ' to $' + totals.high;
-   }
-   return totalsString;
+   return this.$store.getters.pledgeTotal(this.pledges, this.unit_range_low, this.unit_range_high);
},
```

```diff
+ pledgeParticipant (pledge) {
+   return this.$store.getters.participantById(pledge.participant_user_id);
+ }
```

## PledgesByState

```diff
participants () {
  return this.$store.getters.participantsByProgramId(this.program.id);
},
```

```diff
  classrooms () {
-   return uniqBy(flatMap(this.program.participants, participant => {
+   return uniqBy(flatMap(this.participants, participant => {
      let classroom = participant.participant_info.classroom;
      return classroom;
    }), 'id').sort((a, b) => a.name > b.name ? 1 : -1);
  },
```

```diff
myPledgedStates () {
  let includedStatuses = [2, 3, 8];

  return uniq(
-     this.program.participants
-       .flatMap(participant => participant.participant_info.pledges)
-       .filter(pledge => includedStatuses.includes(pledge.pledge_status_id))
-       .map(pledge => pledge.pledge_sponsor.state)
+     flatMap(this.participants, participant => {
+       return flatMap(participant.participant_info.pledges, pledges => {
+           return flatMap(pledges, pledge => {
+               if (includedStatuses.includes(pledge.pledge_status_id)) {
+                   return pledge.pledge_sponsor.state;
+               }
+           });
+       });
    })
  );
},
```

```diff
  myPledgedCountries () {
    return uniq(
-     flatMap(this.program.participants, participant => {
+     flatMap(this.participants, participant => {
        return flatMap(participant.participant_info.pledges, pledges => {
-         if (pledges.pledge_sponsor.country_entity) {
-           return pledges.pledge_sponsor.country_entity.name;
-         }
-         return '';
-       }).filter(country => !!country);
+         return flatMap(pledges, pledge => {
+           if (pledge.pledge_sponsor !== undefined) {
+               if (pledge.pledge_sponsor.country_entity) {
+                 return pledge.pledge_sponsor.country_entity.name;
+               }
+           }
+           return '';
+         }).filter(country => !!country);
+       });
      })
    );
  },
```

- <https://github.com/Boosterthon/titan-dashboard/compare/develop...feature/vuex-2>
- <https://github.com/Boosterthon/titan-dashboard/blob/develop/resources/js/store/index.js>

# 💡Ideas

## Checklists

## Google Cloud Platform

## Amazon Web Services

## Presentation Outline

## Create Git Patch Files

```sh
# commits added in your feature branch
# To see commits differences between the target branch and the current checked out branch,
git diff --oneline --graph develop..feature/vuex-2
git diff --oneline --graph master..feature
git format-patch develop -o patches
git log <source-branch>..feature/<branch>

# To create a Git patch file for a specific commit
git format-patch -1 <commit_sha> -o patches
git checkout <branch-to-apply-patch>
git am patches/0001-My-feature-commit-1.patch
# ...see a brand new commit created for your patch operation
git log --oneline --graph
```

## Git Patch Troubleshooting

```sj
git ls-files --stage <directory>
````

```sh
git am --skip
```

To solve Git apply merging errors, identify the files that are
causing problems, edit them, and run the `git am` command with
the `--continue` option.

```sh
git am --continue
```

## Conclusion

In this tutorial, you learned:

- How to use `git format-patch` to create Git patch files for single commits
- How to apply them to the target branch easily using `git am`

```js
console.log('auth.error:', this.$store.state.auth.error);
console.log('auth.isBetaUser:', this.$store.state.auth.isBetaUser);
console.log('auth.parentUser:', this.$store.state.auth.parentUser);
console.log('auth.user:', this.$store.state.auth.user);
console.log('auth.userType:', this.$store.state.auth.userType);
console.log('[auth/avatarPath]: ', this.$store.getters['auth/avatarPath']);
console.log('[auth/getUser]: ', this.$store.getters['auth/getUser']);
console.log('[auth/getUser].id: ', this.$store.getters['auth/getUser'].id);
console.log('[auth/getUser].is_teacher_user: ', this.$store.getters['auth/getUser'].is_teacher_user);
console.log('[auth/getUserType]:', this.$store.getters['auth/getUserType']);
console.log('[auth/loggedIn]: ', this.$store.getters['auth/loggedIn']);
console.log('[auth/user]: ', this.$store.getters['auth/user']);
console.log('[auth/userHasParticipants]: ', this.$store.getters['auth/userHasParticipants']);
console.log('[auth/userIsTeacher]:', this.$store.getters['auth/userIsTeacher']);
console.log('[participant/getParticipants]: ', this.$store.getters['participant/getParticipants']);
console.log('[participant/getParticipantById]: ', this.$store.getters['participant/getParticipantById'](5));
console.log('[participant/getTeacherParticipant]: ', this.$store.getters['participant/getTeacherParticipant'](program));
console.log('[participant/getParticipantsInProgram]: ', this.$store.getters['participant/getParticipantsInProgram'](program));
console.log('[participant/getSmallestIdParticipant]: ', this.$store.getters['participant/getSmallestIdParticipant'](program));
console.log('[participant/hasParticipants]: ', this.$store.getters['participant/hasParticipants']);
console.log('[participant/getAvatarPath]: ', this.$store.getters['participant/getAvatarPath']);
console.log('[participant/getLastParticipant]: ', this.$store.getters['participant/getLastParticipant']);
console.log('[participant/getParticipantsByProgramId]: ', this.$store.getters['participant/getParticipantsByProgramId'](4));
console.log('[participant/getOtherParticipants]: ', this.$store.getters['participant/getOtherParticipants'](4));
console.log('[participant/participantProgram]: ', this.$store.getters['participant/participantProgram'])
console.log('[emailer/participantProgram]: ', this.$store.getters['emailer/participantProgram'])
console.log('[emailer/getCurrentSponsorEmails]: ', this.$store.getters['emailer/getCurrentSponsorEmails'])
console.log('[emailer/familyPledgingObj]: ', this.$store.getters['emailer/familyPledgingObj'])
console.log('[emailer/participantForPreviousSponsors]: ', this.$store.getters['emailer/participantForPreviousSponsors'])
console.log('[emailer/participantUserId]: ', this.$store.getters['emailer/participantUserId'])
console.log('[emailer/getPreviousSponsors]: ', this.$store.getters['emailer/getPreviousSponsors'])
console.log('[program/getActivePrograms]:', this.$store.getters['program/getActivePrograms']);
console.log('[program/getProgram]:', this.$store.getters['program/getProgram'](id));
console.log('[program/getProgramByParticipant]:', this.$store.getters['program/getProgram'](participant));
console.log('[program/getParticipantsInProgram]:', this.$store.getters['program/getParticipantsInProgram'](participant));
console.log('[program/hasParticipants]:', this.$store.getters['program/hasParticipants'];
console.log('[microsite/getMicrositeByProgramId]:', this.$store.getters['microsite/getMicrositeByProgramId']);
console.log('[pledge/getPledges]:', this.$store.getters['pledge/getPledges']);
console.log('[pledge/getPpuPledgeTypeId]:', this.$store.getters['pledge/getPpuPledgeTypeId']);
console.log('[pledge/getPledgeStatusIdsWithPayment]:', this.$store.getters['pledge/getPledgeStatusIdsWithPayment']);
console.log('[pledge/hasPaidAllPledges]:', this.$store.getters['pledge/hasPaidAllPledges'](pledges, unitHigh, unitLow));
console.log('[pledge/pledgeTotal]:', this.$store.getters['pledge/pledgeTotal'](pledges));
console.log('[pledge/isMissingPayment]:', this.$store.getters['pledge/isMissingPayment'](pledges));
console.log('[pledge/showAllStatuses]:', this.$store.getters['pledge/showAllStatuses'](pledges));
console.log('[pledge/getPledgeProgram]:', this.$store.getters['pledge/getPledgeProgram'](pledge));
console.log('[pledge/getFlatPledges]:', this.$store.getters['pledge/getFlatPledges'](pledges));
console.log('[pledge/getPledgesByParticipantId]:', this.$store.getters['pledge/getPledgesByParticipantId'](participantId));
console.log('[pledge/getSortedPledgesByDateEntered]:', this.$store.getters['pledge/getSortedPledgesByDateEntered'](pledges));
console.log('[pledge/isFamilyPledgingEnabled]:', this.$store.getters['pledge/isFamilyPledgingEnabled'](participant));
console.log('[pledge/getAllParticipantPledges]:', this.$store.getters['pledge/getAllParticipantPledges']);
console.log('[pledge/getFamilyPledges]:', this.$store.getters['pledge/getFamilyPledges'](pledges, program));
console.log('[ui/getLang]:', this.$store.getters['ui/getLang']);
console.log('[ui/getStates]:', this.$store.getters['ui/getState']);
console.log('[ui/getActiveTab]:', this.$store.getters['ui/getActiveTab']);
```


```js
import FamilyPledging from '@/utilities/FamilyPledging';
import { find } from 'lodash';

export const namespaced = true;

export const state = {
    contacts: []
};

export const getters = {
    participantForPreviousSponsors: (state, getters) => {
        // TEST ( 'this.$router available, otherwise re-import the router instance')
        let participantId = parseInt(this.$router.currentRoute.params.participantUserId);

        if (typeof participantId === 'undefined' || participantId === null || isNaN(participantId)) {
            // Default to the first participant a parent has.
            participantId = getters
                .activePrograms[getters.activeTab]
                .participants
                .reduce((min, current) => min.id < current.id ? min : current)
                .id;
        }
        const familyPledgingObj = getters.familyPledgingObj(participantId);

        if (familyPledgingObj.isFamilyPledgingEnabled() && familyPledgingObj.getSmallestIdParticipantInCurrentParticipantProgram()) {
            return familyPledgingObj.getSmallestIdParticipantInCurrentParticipantProgram();
        } else if (familyPledgingObj.getCurrentParticipant()) {
            return familyPledgingObj.getCurrentParticipant();
        } else {
            return null;
        }
    },

    participantProgram: (state, getters) => {
        // return state.auth.user.programs.find(program => {
        //     return program.participants.find(participant => {
        //         return participant.id === getters.participantForPreviousSponsors.id;
        //     }) !== undefined;
        // });
        console.log('state.auth.user.programs:', state.auth.user.programs);

        return find(state.auth.user.programs, program => {
            return find(program.participants, participant => participant.id === getters.participantForPreviousSponsors.id) !== undefined;
        });
    },

    getCurrentSponsorEmails: (state, getters) => {
        const pledges = getters.getAllParticipantPledges;
        const currentSponsorEmails = [];
        var participantProgram = getters.participantProgram;
        pledges.forEach(pledge => {
            const isCurrentSponsor = pledge.program_id === participantProgram.id && pledge.participant_user_id === getters.participantForPreviousSponsors.participant_info.user_id;

            if (isCurrentSponsor) {
                currentSponsorEmails.push(pledge.pledge_sponsor.email);
            }
        });

        return currentSponsorEmails;
    },

    getPreviousSponsors: (state, getters) => {
        let pledges = getters.getAllParticipantPledges;
        var participantProgram = getters.participantProgram;
        const currentSponsorEmails = getters.getCurrentSponsorEmails;

        // Filter out previous sponsors who are not also current sponsors
        pledges = pledges.filter(pledge => {
            const isCurrentSponsor = pledge.program_id === participantProgram.id && pledge.participant_user_id === getters.participantForPreviousSponsors.participant_info.user_id;

            return !isCurrentSponsor && currentSponsorEmails.indexOf(pledge.pledge_sponsor.email) === -1;
        });

        return pledges.map(pledge => {
            let optOut;

            if (pledge.pledge_sponsor.user && pledge.pledge_sponsor.user.id) {
                optOut = pledge.pledge_sponsor.email_opt_out.length > 0 || pledge.pledge_sponsor.user.email_opt_out;
            } else {
                optOut = pledge.pledge_sponsor.email_opt_out.length > 0;
            }

            return {
                ...pledge.pledge_sponsor,
                isSelected: true,
                isPreviousSponsor: true,
                optOut: optOut
            };
        });
    },

    familyPledgingObj: state => participantId => {
        return new FamilyPledging(state.auth.user.programs, participantId);
    }
};

export const mutations = {
    SET_CONTACTS (state, contacts) {
        state.contacts = state.contacts.concat(contacts);
    }
};

export default {
    namespaced,
    getters,
    mutations
};







```
