[![QuickBox](https://quickbox.io/files/2018/12/qb_logo_original.png "QuickBox")](https://quickbox.io)


---

This is the QuickBox Pro's translations repo.
Here, you can find the languages files used by QuickBox Pro..

Feel free to discuss with us on our [Official Discord](https://discord.gg/hCCbVhu) if you want to see your preferred language supported in a future version of QuickBox Pro.

---

## How to contribute a language ? :
#### 1. Grab the repo
Clone the Translation Repo to your local computer...
```
git clone https://lab.quickbox.io/QuickBox/pro_v3_translations.git
```
The easiest and most effective way to do this is to download a desktop git application such as GitKraken. You can then clone the Repo to a location of your choosing. From there, you can commit/collaborate with others working on translations.

#### 2. Duplicate a language file
Next, duplicate one of the language files, English is our main template.
For instance, if you are creating a Spanish translation file. Copy the `lang_en` file and rename it to `lang_es`.
Once you have renamed your file to `lang_es`, you can begin translating all strings of text for different variables.

|            Example:              |
| -------------------------------- |
| - $L['ACTIVATION'] = 'Activation'; |
| Would become                     |
| + $L['ACTIVATION'] = 'Activación'; |

Continue onward until all strings are translated.

#### 3. Submit a PR
Once your file is translated, simply push to the repo for a pull request. The file will be reviewed, and if translated entirely, integrated automatically in the next QuickBox Pro releases.

#### 4. Enjoy!
Finally, enjoy your hard work and take all the credit for being an awesome human!!!
