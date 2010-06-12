<?php
/**
 * Auto-generated class. CSHARP syntax highlighting 
 *
 * PHP version 4 and 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @copyright  2004-2006 Andrey Demenev
 * @license    http://www.php.net/license/3_0.txt  PHP License
 * @link       http://pear.php.net/package/Text_Highlighter
 * @category   Text
 * @package    Text_Highlighter
 * @version    generated from: csharp.xml
 * @author Charles Tang <tngchao@gmail.com>
 *
 */

/**
 * @ignore
 */

require_once 'Text/Highlighter.php';

/**
 * Auto-generated class. CSHARP syntax highlighting
 *
 * @author Charles Tang <tngchao@gmail.com>
 * @category   Text
 * @package    Text_Highlighter
 * @copyright  2004-2006 Andrey Demenev
 * @license    http://www.php.net/license/3_0.txt  PHP License
 * @version    Release: 0.7.1
 * @link       http://pear.php.net/package/Text_Highlighter
 */
class  Text_Highlighter_CSHARP extends Text_Highlighter
{
    var $_language = 'csharp';

    /**
     * PHP4 Compatible Constructor
     *
     * @param array  $options
     * @access public
     */
    function Text_Highlighter_CSHARP($options=array())
    {
        $this->__construct($options);
    }


    /**
     *  Constructor
     *
     * @param array  $options
     * @access public
     */
    function __construct($options=array())
    {

        $this->_options = $options;
        $this->_regs = array (
            -1 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|((?i)[a-z_]\\w*)|((?i)0[xX][\\da-f]+)|((?i)\\d\\d*|\\b0\\b)|((?i)0[0-7]+)|((?i)(\\d*\\.\\d+)|(\\d+\\.\\d*))|((?i)((\\d+|((\\d*\\.\\d+)|(\\d+\\.\\d*)))[eE][+-]?\\d+))/',
            0 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|((?i)[a-z_]\\w*)|((?i)0[xX][\\da-f]+)|((?i)\\d\\d*|\\b0\\b)|((?i)0[0-7]+)|((?i)(\\d*\\.\\d+)|(\\d+\\.\\d*))|((?i)((\\d+|((\\d*\\.\\d+)|(\\d+\\.\\d*)))[eE][+-]?\\d+))/',
            1 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|((?i)[a-z_]\\w*)|((?i)0[xX][\\da-f]+)|((?i)\\d\\d*|\\b0\\b)|((?i)0[0-7]+)|((?i)(\\d*\\.\\d+)|(\\d+\\.\\d*))|((?i)((\\d+|((\\d*\\.\\d+)|(\\d+\\.\\d*)))[eE][+-]?\\d+))/',
            2 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|((?i)[a-z_]\\w*)|((?i)0[xX][\\da-f]+)|((?i)\\d\\d*|\\b0\\b)|((?i)0[0-7]+)|((?i)(\\d*\\.\\d+)|(\\d+\\.\\d*))|((?i)((\\d+|((\\d*\\.\\d+)|(\\d+\\.\\d*)))[eE][+-]?\\d+))/',
            3 => '/((?i)\\s@\\w+\\s)|((?i)((https?|ftp):\\/\\/[\\w\\?\\.\\-\\&=\\/%+]+)|(^|[\\s,!?])www\\.\\w+\\.\\w+[\\w\\?\\.\\&=\\/%+]*)|((?i)\\w+[\\.\\w\\-]+@(\\w+[\\.\\w\\-])+)|((?i)\\bnote:)|((?i)\\$\\w+\\s*:.*\\$)/',
            4 => '/((?i)\\\\[\\\\"\'`tnr\\$\\{])/',
            5 => '/((?i)\\\\.)/',
            6 => '/((?i)\\s@\\w+\\s)|((?i)((https?|ftp):\\/\\/[\\w\\?\\.\\-\\&=\\/%+]+)|(^|[\\s,!?])www\\.\\w+\\.\\w+[\\w\\?\\.\\&=\\/%+]*)|((?i)\\w+[\\.\\w\\-]+@(\\w+[\\.\\w\\-])+)|((?i)\\bnote:)|((?i)\\$\\w+\\s*:.*\\$)/',
        );
        $this->_counts = array (
            -1 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
                10 => 0,
                11 => 2,
                12 => 5,
            ),
            0 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
                10 => 0,
                11 => 2,
                12 => 5,
            ),
            1 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
                10 => 0,
                11 => 2,
                12 => 5,
            ),
            2 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
                10 => 0,
                11 => 2,
                12 => 5,
            ),
            3 => 
            array (
                0 => 0,
                1 => 3,
                2 => 1,
                3 => 0,
                4 => 0,
            ),
            4 => 
            array (
                0 => 0,
            ),
            5 => 
            array (
                0 => 0,
            ),
            6 => 
            array (
                0 => 0,
                1 => 3,
                2 => 1,
                3 => 0,
                4 => 0,
            ),
        );
        $this->_delim = array (
            -1 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => '',
                8 => '',
                9 => '',
                10 => '',
                11 => '',
                12 => '',
            ),
            0 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => '',
                8 => '',
                9 => '',
                10 => '',
                11 => '',
                12 => '',
            ),
            1 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => '',
                8 => '',
                9 => '',
                10 => '',
                11 => '',
                12 => '',
            ),
            2 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => '',
                8 => '',
                9 => '',
                10 => '',
                11 => '',
                12 => '',
            ),
            3 => 
            array (
                0 => '',
                1 => '',
                2 => '',
                3 => '',
                4 => '',
            ),
            4 => 
            array (
                0 => '',
            ),
            5 => 
            array (
                0 => '',
            ),
            6 => 
            array (
                0 => '',
                1 => '',
                2 => '',
                3 => '',
                4 => '',
            ),
        );
        $this->_inner = array (
            -1 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'identifier',
                8 => 'number',
                9 => 'number',
                10 => 'number',
                11 => 'number',
                12 => 'number',
            ),
            0 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'identifier',
                8 => 'number',
                9 => 'number',
                10 => 'number',
                11 => 'number',
                12 => 'number',
            ),
            1 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'identifier',
                8 => 'number',
                9 => 'number',
                10 => 'number',
                11 => 'number',
                12 => 'number',
            ),
            2 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'identifier',
                8 => 'number',
                9 => 'number',
                10 => 'number',
                11 => 'number',
                12 => 'number',
            ),
            3 => 
            array (
                0 => 'inlinedoc',
                1 => 'url',
                2 => 'url',
                3 => 'inlinedoc',
                4 => 'inlinedoc',
            ),
            4 => 
            array (
                0 => 'special',
            ),
            5 => 
            array (
                0 => 'special',
            ),
            6 => 
            array (
                0 => 'inlinedoc',
                1 => 'url',
                2 => 'url',
                3 => 'inlinedoc',
                4 => 'inlinedoc',
            ),
        );
        $this->_end = array (
            0 => '/(?i)\\}/',
            1 => '/(?i)\\)/',
            2 => '/(?i)\\]/',
            3 => '/(?i)\\*\\//',
            4 => '/(?i)"/',
            5 => '/(?i)\'/',
            6 => '/(?mi)$/',
        );
        $this->_states = array (
            -1 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => -1,
                8 => -1,
                9 => -1,
                10 => -1,
                11 => -1,
                12 => -1,
            ),
            0 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => -1,
                8 => -1,
                9 => -1,
                10 => -1,
                11 => -1,
                12 => -1,
            ),
            1 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => -1,
                8 => -1,
                9 => -1,
                10 => -1,
                11 => -1,
                12 => -1,
            ),
            2 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => -1,
                8 => -1,
                9 => -1,
                10 => -1,
                11 => -1,
                12 => -1,
            ),
            3 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
            ),
            4 => 
            array (
                0 => -1,
            ),
            5 => 
            array (
                0 => -1,
            ),
            6 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
            ),
        );
        $this->_keywords = array (
            -1 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => 
                array (
                    'types' => '/^(bool|byte|sbyte|char|decimal|double|float|int|uint|long|ulong|short|ushort|string|object)$/',
                    'reserved' => '/^(abstract|event|new|struct|as|explicit|null|switch|base|extern|this|false|operator|throw|break|finally|out|true|fixed|override|try|case|params|typeof|catch|for|private|foreach|protected|checked|goto|public|unchecked|class|if|readonly|unsafe|const|implicit|ref|continue|in|return|using|virtual|default|interface|sealed|volatile|delegate|internal|void|do|is|sizeof|while|lock|stackalloc|else|static|enum|namespace)$/',
                    'builtin' => '/^(System|Object|FXAssembly|ThisAssembly|AssemblyRef|ICloneable|Array|ValueType|SZArrayHelper|IDisposable|IComparable|ThrowHelper|IFormattable|IConvertible|Enum|ExceptionArgument|ExceptionResource|String|StringSplitOptions|StringComparer|CultureAwareComparer|OrdinalComparer|StringComparison|Exception|DateTime|DateTimeKind|DateTimeOffset|SystemException|OutOfMemoryException|StackOverflowException|DataMisalignedException|ExecutionEngineException|Delegate|DelegateBindingFlags|MulticastDelegate|LogLevel|SwitchStructure|BCLDebug|MemberAccessException|Activator|AccessViolationException|ApplicationException|EventArgs|ResolveEventArgs|AssemblyLoadEventArgs|ResolveEventHandler|AssemblyLoadEventHandler|AppDomainInitializer|AppDomainInitializerInfo|MarshalByRefObject|AppDomain|CrossAppDomainDelegate|AppDomainManagerInitializationOptions|AppDomainManager|IAppDomainSetup|AppDomainSetup|LoaderOptimization|Attribute|LoaderOptimizationAttribute|AppDomainUnloadedException|ActivationContext|ApplicationIdentity|ApplicationId|ArgumentException|ArgumentNullException|ArgumentOutOfRangeException|ArgIterator|ArithmeticException|ArrayTypeMismatchException|AsyncCallback|AttributeTargets|AttributeUsageAttribute|BadImageFormatException|BitConverter|Boolean|Buffer|Byte|CannotUnloadAppDomainException|Char|CharEnumerator|ConfigEvents|ConfigNodeType|ConfigNodeSubType|IConfigHandler|ConfigServer|ConfigTreeParser|ConfigNode|CLSCompliantAttribute|TypeUnloadedException|CompatibilityFlag|Console|ConsoleCancelEventHandler|ConsoleCancelEventArgs|ConsoleColor|ConsoleKey|ConsoleKeyInfo|ConsoleModifiers|ConsoleSpecialKey|ContextMarshalException|Convert|Base64FormattingOptions|ContextBoundObject|ContextStaticAttribute|Currency|TimeZone|CurrentSystemTimeZone|DayOfWeek|DBNull|Decimal|DefaultBinder|DelegateSerializationHolder|DivideByZeroException|Double|DuplicateWaitObjectException|Empty|TypeLoadException|EntryPointNotFoundException|DllNotFoundException|EnvironmentVariableTarget|Environment|EventHandler|FieldAccessException|FlagsAttribute|FormatException|GCCollectionMode|Guid|IAsyncResult|ICustomFormatter|IFormatProvider|IndexOutOfRangeException|InsufficientMemoryException|Int16|Int32|Int64|IntPtr|Internal|InvalidCastException|InvalidOperationException|InvalidProgramException|IServiceProvider|LocalDataStore|LdsSyncHelper|LocalDataStoreSlot|LocalDataStoreMgr|Math|Mda|MethodAccessException|MidpointRounding|MissingMemberException|MissingFieldException|MissingMethodException|MulticastNotSupportedException|NonSerializedAttribute|NotFiniteNumberException|NotImplementedException|NotSupportedException|NullReferenceException|Number|ObjectDisposedException|ObsoleteAttribute|OleAutBinder|OperatingSystem|OperationCanceledException|OverflowException|ParamArrayAttribute|ParseNumbers|PlatformID|PlatformNotSupportedException|Random|RankException|ResId|CtorDelegate|Type|RuntimeType|ReflectionOnlyType|Utf8String|ASSERT|LOGIC|RuntimeArgumentHandle|MethodDescChunkHandle|FastArrayHandle|RuntimeTypeHandle|RuntimeMethodHandle|RuntimeFieldHandle|AssemblyHandle|ModuleHandle|Signature|SignatureStruct|Resolver|SByte|SerializableAttribute|SharedStatics|Single|TimeoutException|TimeSpan|TypeCode|TypedReference|TypeInitializationException|UInt16|UInt32|UInt64|UIntPtr|UnauthorizedAccessException|UnitySerializationHolder|UnhandledExceptionEventArgs|UnhandledExceptionEventHandler|UnSafeCharBuffer|Variant|Version|Void|WeakReference|XmlIgnoreMemberAttribute|ThreadStaticAttribute|STAThreadAttribute|MTAThreadAttribute|Nullable|DateTimeFormat|DateTimeParse|DTSubStringType|DTSubString|DateTimeToken|DateTimeRawInfo|ParseFailureKind|ParseFlags|DateTimeResult|ParsingInfo|TokenType|ExternDll|HResults|SNINativeMethodWrapper|QTypes|ProviderEnum|PrefixNum|IOType|SqlAsyncCallbackDelegate|ConsumerInfo|NativeOledbWrapper|IUnknown|IChapteredRowset|ProviderNum|ITransactionLocal|BOID|ModuleLoadException|ModuleLoadExceptionHandlerException|ModuleUninitializer|LanguageSupport|Progress|TriBool|ICLRRuntimeHost|ICorRuntimeHost|ThisModule|Bid|ApiGroup|CtrlCB|BindingCookie|CtlCmd|BIDEXTINFO|AutoInit|NativeMethods|BidIdentityAttribute|BidMetaTextAttribute|SqlDependencyProcessDispatcher|SqlConnectionContainer|SqlNotificationParser|SqlConnectionContainerHashHelper|InvariantComparer|SRDescriptionAttribute|SRCategoryAttribute|UriParser|Uri|UriBuilder|UriFormatException|UriHostNameType|UriPartial|DomainNameHelper|IPv4AddressHelper|IPv6AddressHelper|UncNameHelper|UriSyntaxFlags|UriTypeConverter|UriKind|UriComponents|UriFormat|UriIdnScope|GenericUriParserOptions|GenericUriParser|HttpStyleUriParser|FtpStyleUriParser|FileStyleUriParser|NewsStyleUriParser|GopherStyleUriParser|LdapStyleUriParser|NetPipeStyleUriParser|NetTcpStyleUriParser|ClientUtils|SecurityUtils|IInitializeSpy|IStream|IGlobalInterfaceTable|IMarshal|IEnumContextProps|IServicedComponentInfo|IObjContext|OpenMPWithMultipleAppdomainsException|ReplacesCorHdrNumericDefines|SYSGEOTYPE|SYSGEOCLASS|VARENUM|ValidatorFlags|ETaskType|NativeDll|DefaultDomain|AtExitLock|SafeServiceHandle)$/',
                ),
                8 => 
                array (
                ),
                9 => 
                array (
                ),
                10 => 
                array (
                ),
                11 => 
                array (
                ),
                12 => 
                array (
                ),
            ),
            0 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => 
                array (
                    'types' => '/^(bool|byte|sbyte|char|decimal|double|float|int|uint|long|ulong|short|ushort|string|object)$/',
                    'reserved' => '/^(abstract|event|new|struct|as|explicit|null|switch|base|extern|this|false|operator|throw|break|finally|out|true|fixed|override|try|case|params|typeof|catch|for|private|foreach|protected|checked|goto|public|unchecked|class|if|readonly|unsafe|const|implicit|ref|continue|in|return|using|virtual|default|interface|sealed|volatile|delegate|internal|void|do|is|sizeof|while|lock|stackalloc|else|static|enum|namespace)$/',
                    'builtin' => '/^(System|Object|FXAssembly|ThisAssembly|AssemblyRef|ICloneable|Array|ValueType|SZArrayHelper|IDisposable|IComparable|ThrowHelper|IFormattable|IConvertible|Enum|ExceptionArgument|ExceptionResource|String|StringSplitOptions|StringComparer|CultureAwareComparer|OrdinalComparer|StringComparison|Exception|DateTime|DateTimeKind|DateTimeOffset|SystemException|OutOfMemoryException|StackOverflowException|DataMisalignedException|ExecutionEngineException|Delegate|DelegateBindingFlags|MulticastDelegate|LogLevel|SwitchStructure|BCLDebug|MemberAccessException|Activator|AccessViolationException|ApplicationException|EventArgs|ResolveEventArgs|AssemblyLoadEventArgs|ResolveEventHandler|AssemblyLoadEventHandler|AppDomainInitializer|AppDomainInitializerInfo|MarshalByRefObject|AppDomain|CrossAppDomainDelegate|AppDomainManagerInitializationOptions|AppDomainManager|IAppDomainSetup|AppDomainSetup|LoaderOptimization|Attribute|LoaderOptimizationAttribute|AppDomainUnloadedException|ActivationContext|ApplicationIdentity|ApplicationId|ArgumentException|ArgumentNullException|ArgumentOutOfRangeException|ArgIterator|ArithmeticException|ArrayTypeMismatchException|AsyncCallback|AttributeTargets|AttributeUsageAttribute|BadImageFormatException|BitConverter|Boolean|Buffer|Byte|CannotUnloadAppDomainException|Char|CharEnumerator|ConfigEvents|ConfigNodeType|ConfigNodeSubType|IConfigHandler|ConfigServer|ConfigTreeParser|ConfigNode|CLSCompliantAttribute|TypeUnloadedException|CompatibilityFlag|Console|ConsoleCancelEventHandler|ConsoleCancelEventArgs|ConsoleColor|ConsoleKey|ConsoleKeyInfo|ConsoleModifiers|ConsoleSpecialKey|ContextMarshalException|Convert|Base64FormattingOptions|ContextBoundObject|ContextStaticAttribute|Currency|TimeZone|CurrentSystemTimeZone|DayOfWeek|DBNull|Decimal|DefaultBinder|DelegateSerializationHolder|DivideByZeroException|Double|DuplicateWaitObjectException|Empty|TypeLoadException|EntryPointNotFoundException|DllNotFoundException|EnvironmentVariableTarget|Environment|EventHandler|FieldAccessException|FlagsAttribute|FormatException|GCCollectionMode|Guid|IAsyncResult|ICustomFormatter|IFormatProvider|IndexOutOfRangeException|InsufficientMemoryException|Int16|Int32|Int64|IntPtr|Internal|InvalidCastException|InvalidOperationException|InvalidProgramException|IServiceProvider|LocalDataStore|LdsSyncHelper|LocalDataStoreSlot|LocalDataStoreMgr|Math|Mda|MethodAccessException|MidpointRounding|MissingMemberException|MissingFieldException|MissingMethodException|MulticastNotSupportedException|NonSerializedAttribute|NotFiniteNumberException|NotImplementedException|NotSupportedException|NullReferenceException|Number|ObjectDisposedException|ObsoleteAttribute|OleAutBinder|OperatingSystem|OperationCanceledException|OverflowException|ParamArrayAttribute|ParseNumbers|PlatformID|PlatformNotSupportedException|Random|RankException|ResId|CtorDelegate|Type|RuntimeType|ReflectionOnlyType|Utf8String|ASSERT|LOGIC|RuntimeArgumentHandle|MethodDescChunkHandle|FastArrayHandle|RuntimeTypeHandle|RuntimeMethodHandle|RuntimeFieldHandle|AssemblyHandle|ModuleHandle|Signature|SignatureStruct|Resolver|SByte|SerializableAttribute|SharedStatics|Single|TimeoutException|TimeSpan|TypeCode|TypedReference|TypeInitializationException|UInt16|UInt32|UInt64|UIntPtr|UnauthorizedAccessException|UnitySerializationHolder|UnhandledExceptionEventArgs|UnhandledExceptionEventHandler|UnSafeCharBuffer|Variant|Version|Void|WeakReference|XmlIgnoreMemberAttribute|ThreadStaticAttribute|STAThreadAttribute|MTAThreadAttribute|Nullable|DateTimeFormat|DateTimeParse|DTSubStringType|DTSubString|DateTimeToken|DateTimeRawInfo|ParseFailureKind|ParseFlags|DateTimeResult|ParsingInfo|TokenType|ExternDll|HResults|SNINativeMethodWrapper|QTypes|ProviderEnum|PrefixNum|IOType|SqlAsyncCallbackDelegate|ConsumerInfo|NativeOledbWrapper|IUnknown|IChapteredRowset|ProviderNum|ITransactionLocal|BOID|ModuleLoadException|ModuleLoadExceptionHandlerException|ModuleUninitializer|LanguageSupport|Progress|TriBool|ICLRRuntimeHost|ICorRuntimeHost|ThisModule|Bid|ApiGroup|CtrlCB|BindingCookie|CtlCmd|BIDEXTINFO|AutoInit|NativeMethods|BidIdentityAttribute|BidMetaTextAttribute|SqlDependencyProcessDispatcher|SqlConnectionContainer|SqlNotificationParser|SqlConnectionContainerHashHelper|InvariantComparer|SRDescriptionAttribute|SRCategoryAttribute|UriParser|Uri|UriBuilder|UriFormatException|UriHostNameType|UriPartial|DomainNameHelper|IPv4AddressHelper|IPv6AddressHelper|UncNameHelper|UriSyntaxFlags|UriTypeConverter|UriKind|UriComponents|UriFormat|UriIdnScope|GenericUriParserOptions|GenericUriParser|HttpStyleUriParser|FtpStyleUriParser|FileStyleUriParser|NewsStyleUriParser|GopherStyleUriParser|LdapStyleUriParser|NetPipeStyleUriParser|NetTcpStyleUriParser|ClientUtils|SecurityUtils|IInitializeSpy|IStream|IGlobalInterfaceTable|IMarshal|IEnumContextProps|IServicedComponentInfo|IObjContext|OpenMPWithMultipleAppdomainsException|ReplacesCorHdrNumericDefines|SYSGEOTYPE|SYSGEOCLASS|VARENUM|ValidatorFlags|ETaskType|NativeDll|DefaultDomain|AtExitLock|SafeServiceHandle)$/',
                ),
                8 => 
                array (
                ),
                9 => 
                array (
                ),
                10 => 
                array (
                ),
                11 => 
                array (
                ),
                12 => 
                array (
                ),
            ),
            1 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => 
                array (
                    'types' => '/^(bool|byte|sbyte|char|decimal|double|float|int|uint|long|ulong|short|ushort|string|object)$/',
                    'reserved' => '/^(abstract|event|new|struct|as|explicit|null|switch|base|extern|this|false|operator|throw|break|finally|out|true|fixed|override|try|case|params|typeof|catch|for|private|foreach|protected|checked|goto|public|unchecked|class|if|readonly|unsafe|const|implicit|ref|continue|in|return|using|virtual|default|interface|sealed|volatile|delegate|internal|void|do|is|sizeof|while|lock|stackalloc|else|static|enum|namespace)$/',
                    'builtin' => '/^(System|Object|FXAssembly|ThisAssembly|AssemblyRef|ICloneable|Array|ValueType|SZArrayHelper|IDisposable|IComparable|ThrowHelper|IFormattable|IConvertible|Enum|ExceptionArgument|ExceptionResource|String|StringSplitOptions|StringComparer|CultureAwareComparer|OrdinalComparer|StringComparison|Exception|DateTime|DateTimeKind|DateTimeOffset|SystemException|OutOfMemoryException|StackOverflowException|DataMisalignedException|ExecutionEngineException|Delegate|DelegateBindingFlags|MulticastDelegate|LogLevel|SwitchStructure|BCLDebug|MemberAccessException|Activator|AccessViolationException|ApplicationException|EventArgs|ResolveEventArgs|AssemblyLoadEventArgs|ResolveEventHandler|AssemblyLoadEventHandler|AppDomainInitializer|AppDomainInitializerInfo|MarshalByRefObject|AppDomain|CrossAppDomainDelegate|AppDomainManagerInitializationOptions|AppDomainManager|IAppDomainSetup|AppDomainSetup|LoaderOptimization|Attribute|LoaderOptimizationAttribute|AppDomainUnloadedException|ActivationContext|ApplicationIdentity|ApplicationId|ArgumentException|ArgumentNullException|ArgumentOutOfRangeException|ArgIterator|ArithmeticException|ArrayTypeMismatchException|AsyncCallback|AttributeTargets|AttributeUsageAttribute|BadImageFormatException|BitConverter|Boolean|Buffer|Byte|CannotUnloadAppDomainException|Char|CharEnumerator|ConfigEvents|ConfigNodeType|ConfigNodeSubType|IConfigHandler|ConfigServer|ConfigTreeParser|ConfigNode|CLSCompliantAttribute|TypeUnloadedException|CompatibilityFlag|Console|ConsoleCancelEventHandler|ConsoleCancelEventArgs|ConsoleColor|ConsoleKey|ConsoleKeyInfo|ConsoleModifiers|ConsoleSpecialKey|ContextMarshalException|Convert|Base64FormattingOptions|ContextBoundObject|ContextStaticAttribute|Currency|TimeZone|CurrentSystemTimeZone|DayOfWeek|DBNull|Decimal|DefaultBinder|DelegateSerializationHolder|DivideByZeroException|Double|DuplicateWaitObjectException|Empty|TypeLoadException|EntryPointNotFoundException|DllNotFoundException|EnvironmentVariableTarget|Environment|EventHandler|FieldAccessException|FlagsAttribute|FormatException|GCCollectionMode|Guid|IAsyncResult|ICustomFormatter|IFormatProvider|IndexOutOfRangeException|InsufficientMemoryException|Int16|Int32|Int64|IntPtr|Internal|InvalidCastException|InvalidOperationException|InvalidProgramException|IServiceProvider|LocalDataStore|LdsSyncHelper|LocalDataStoreSlot|LocalDataStoreMgr|Math|Mda|MethodAccessException|MidpointRounding|MissingMemberException|MissingFieldException|MissingMethodException|MulticastNotSupportedException|NonSerializedAttribute|NotFiniteNumberException|NotImplementedException|NotSupportedException|NullReferenceException|Number|ObjectDisposedException|ObsoleteAttribute|OleAutBinder|OperatingSystem|OperationCanceledException|OverflowException|ParamArrayAttribute|ParseNumbers|PlatformID|PlatformNotSupportedException|Random|RankException|ResId|CtorDelegate|Type|RuntimeType|ReflectionOnlyType|Utf8String|ASSERT|LOGIC|RuntimeArgumentHandle|MethodDescChunkHandle|FastArrayHandle|RuntimeTypeHandle|RuntimeMethodHandle|RuntimeFieldHandle|AssemblyHandle|ModuleHandle|Signature|SignatureStruct|Resolver|SByte|SerializableAttribute|SharedStatics|Single|TimeoutException|TimeSpan|TypeCode|TypedReference|TypeInitializationException|UInt16|UInt32|UInt64|UIntPtr|UnauthorizedAccessException|UnitySerializationHolder|UnhandledExceptionEventArgs|UnhandledExceptionEventHandler|UnSafeCharBuffer|Variant|Version|Void|WeakReference|XmlIgnoreMemberAttribute|ThreadStaticAttribute|STAThreadAttribute|MTAThreadAttribute|Nullable|DateTimeFormat|DateTimeParse|DTSubStringType|DTSubString|DateTimeToken|DateTimeRawInfo|ParseFailureKind|ParseFlags|DateTimeResult|ParsingInfo|TokenType|ExternDll|HResults|SNINativeMethodWrapper|QTypes|ProviderEnum|PrefixNum|IOType|SqlAsyncCallbackDelegate|ConsumerInfo|NativeOledbWrapper|IUnknown|IChapteredRowset|ProviderNum|ITransactionLocal|BOID|ModuleLoadException|ModuleLoadExceptionHandlerException|ModuleUninitializer|LanguageSupport|Progress|TriBool|ICLRRuntimeHost|ICorRuntimeHost|ThisModule|Bid|ApiGroup|CtrlCB|BindingCookie|CtlCmd|BIDEXTINFO|AutoInit|NativeMethods|BidIdentityAttribute|BidMetaTextAttribute|SqlDependencyProcessDispatcher|SqlConnectionContainer|SqlNotificationParser|SqlConnectionContainerHashHelper|InvariantComparer|SRDescriptionAttribute|SRCategoryAttribute|UriParser|Uri|UriBuilder|UriFormatException|UriHostNameType|UriPartial|DomainNameHelper|IPv4AddressHelper|IPv6AddressHelper|UncNameHelper|UriSyntaxFlags|UriTypeConverter|UriKind|UriComponents|UriFormat|UriIdnScope|GenericUriParserOptions|GenericUriParser|HttpStyleUriParser|FtpStyleUriParser|FileStyleUriParser|NewsStyleUriParser|GopherStyleUriParser|LdapStyleUriParser|NetPipeStyleUriParser|NetTcpStyleUriParser|ClientUtils|SecurityUtils|IInitializeSpy|IStream|IGlobalInterfaceTable|IMarshal|IEnumContextProps|IServicedComponentInfo|IObjContext|OpenMPWithMultipleAppdomainsException|ReplacesCorHdrNumericDefines|SYSGEOTYPE|SYSGEOCLASS|VARENUM|ValidatorFlags|ETaskType|NativeDll|DefaultDomain|AtExitLock|SafeServiceHandle)$/',
                ),
                8 => 
                array (
                ),
                9 => 
                array (
                ),
                10 => 
                array (
                ),
                11 => 
                array (
                ),
                12 => 
                array (
                ),
            ),
            2 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => 
                array (
                    'types' => '/^(bool|byte|sbyte|char|decimal|double|float|int|uint|long|ulong|short|ushort|string|object)$/',
                    'reserved' => '/^(abstract|event|new|struct|as|explicit|null|switch|base|extern|this|false|operator|throw|break|finally|out|true|fixed|override|try|case|params|typeof|catch|for|private|foreach|protected|checked|goto|public|unchecked|class|if|readonly|unsafe|const|implicit|ref|continue|in|return|using|virtual|default|interface|sealed|volatile|delegate|internal|void|do|is|sizeof|while|lock|stackalloc|else|static|enum|namespace)$/',
                    'builtin' => '/^(System|Object|FXAssembly|ThisAssembly|AssemblyRef|ICloneable|Array|ValueType|SZArrayHelper|IDisposable|IComparable|ThrowHelper|IFormattable|IConvertible|Enum|ExceptionArgument|ExceptionResource|String|StringSplitOptions|StringComparer|CultureAwareComparer|OrdinalComparer|StringComparison|Exception|DateTime|DateTimeKind|DateTimeOffset|SystemException|OutOfMemoryException|StackOverflowException|DataMisalignedException|ExecutionEngineException|Delegate|DelegateBindingFlags|MulticastDelegate|LogLevel|SwitchStructure|BCLDebug|MemberAccessException|Activator|AccessViolationException|ApplicationException|EventArgs|ResolveEventArgs|AssemblyLoadEventArgs|ResolveEventHandler|AssemblyLoadEventHandler|AppDomainInitializer|AppDomainInitializerInfo|MarshalByRefObject|AppDomain|CrossAppDomainDelegate|AppDomainManagerInitializationOptions|AppDomainManager|IAppDomainSetup|AppDomainSetup|LoaderOptimization|Attribute|LoaderOptimizationAttribute|AppDomainUnloadedException|ActivationContext|ApplicationIdentity|ApplicationId|ArgumentException|ArgumentNullException|ArgumentOutOfRangeException|ArgIterator|ArithmeticException|ArrayTypeMismatchException|AsyncCallback|AttributeTargets|AttributeUsageAttribute|BadImageFormatException|BitConverter|Boolean|Buffer|Byte|CannotUnloadAppDomainException|Char|CharEnumerator|ConfigEvents|ConfigNodeType|ConfigNodeSubType|IConfigHandler|ConfigServer|ConfigTreeParser|ConfigNode|CLSCompliantAttribute|TypeUnloadedException|CompatibilityFlag|Console|ConsoleCancelEventHandler|ConsoleCancelEventArgs|ConsoleColor|ConsoleKey|ConsoleKeyInfo|ConsoleModifiers|ConsoleSpecialKey|ContextMarshalException|Convert|Base64FormattingOptions|ContextBoundObject|ContextStaticAttribute|Currency|TimeZone|CurrentSystemTimeZone|DayOfWeek|DBNull|Decimal|DefaultBinder|DelegateSerializationHolder|DivideByZeroException|Double|DuplicateWaitObjectException|Empty|TypeLoadException|EntryPointNotFoundException|DllNotFoundException|EnvironmentVariableTarget|Environment|EventHandler|FieldAccessException|FlagsAttribute|FormatException|GCCollectionMode|Guid|IAsyncResult|ICustomFormatter|IFormatProvider|IndexOutOfRangeException|InsufficientMemoryException|Int16|Int32|Int64|IntPtr|Internal|InvalidCastException|InvalidOperationException|InvalidProgramException|IServiceProvider|LocalDataStore|LdsSyncHelper|LocalDataStoreSlot|LocalDataStoreMgr|Math|Mda|MethodAccessException|MidpointRounding|MissingMemberException|MissingFieldException|MissingMethodException|MulticastNotSupportedException|NonSerializedAttribute|NotFiniteNumberException|NotImplementedException|NotSupportedException|NullReferenceException|Number|ObjectDisposedException|ObsoleteAttribute|OleAutBinder|OperatingSystem|OperationCanceledException|OverflowException|ParamArrayAttribute|ParseNumbers|PlatformID|PlatformNotSupportedException|Random|RankException|ResId|CtorDelegate|Type|RuntimeType|ReflectionOnlyType|Utf8String|ASSERT|LOGIC|RuntimeArgumentHandle|MethodDescChunkHandle|FastArrayHandle|RuntimeTypeHandle|RuntimeMethodHandle|RuntimeFieldHandle|AssemblyHandle|ModuleHandle|Signature|SignatureStruct|Resolver|SByte|SerializableAttribute|SharedStatics|Single|TimeoutException|TimeSpan|TypeCode|TypedReference|TypeInitializationException|UInt16|UInt32|UInt64|UIntPtr|UnauthorizedAccessException|UnitySerializationHolder|UnhandledExceptionEventArgs|UnhandledExceptionEventHandler|UnSafeCharBuffer|Variant|Version|Void|WeakReference|XmlIgnoreMemberAttribute|ThreadStaticAttribute|STAThreadAttribute|MTAThreadAttribute|Nullable|DateTimeFormat|DateTimeParse|DTSubStringType|DTSubString|DateTimeToken|DateTimeRawInfo|ParseFailureKind|ParseFlags|DateTimeResult|ParsingInfo|TokenType|ExternDll|HResults|SNINativeMethodWrapper|QTypes|ProviderEnum|PrefixNum|IOType|SqlAsyncCallbackDelegate|ConsumerInfo|NativeOledbWrapper|IUnknown|IChapteredRowset|ProviderNum|ITransactionLocal|BOID|ModuleLoadException|ModuleLoadExceptionHandlerException|ModuleUninitializer|LanguageSupport|Progress|TriBool|ICLRRuntimeHost|ICorRuntimeHost|ThisModule|Bid|ApiGroup|CtrlCB|BindingCookie|CtlCmd|BIDEXTINFO|AutoInit|NativeMethods|BidIdentityAttribute|BidMetaTextAttribute|SqlDependencyProcessDispatcher|SqlConnectionContainer|SqlNotificationParser|SqlConnectionContainerHashHelper|InvariantComparer|SRDescriptionAttribute|SRCategoryAttribute|UriParser|Uri|UriBuilder|UriFormatException|UriHostNameType|UriPartial|DomainNameHelper|IPv4AddressHelper|IPv6AddressHelper|UncNameHelper|UriSyntaxFlags|UriTypeConverter|UriKind|UriComponents|UriFormat|UriIdnScope|GenericUriParserOptions|GenericUriParser|HttpStyleUriParser|FtpStyleUriParser|FileStyleUriParser|NewsStyleUriParser|GopherStyleUriParser|LdapStyleUriParser|NetPipeStyleUriParser|NetTcpStyleUriParser|ClientUtils|SecurityUtils|IInitializeSpy|IStream|IGlobalInterfaceTable|IMarshal|IEnumContextProps|IServicedComponentInfo|IObjContext|OpenMPWithMultipleAppdomainsException|ReplacesCorHdrNumericDefines|SYSGEOTYPE|SYSGEOCLASS|VARENUM|ValidatorFlags|ETaskType|NativeDll|DefaultDomain|AtExitLock|SafeServiceHandle)$/',
                ),
                8 => 
                array (
                ),
                9 => 
                array (
                ),
                10 => 
                array (
                ),
                11 => 
                array (
                ),
                12 => 
                array (
                ),
            ),
            3 => 
            array (
                0 => 
                array (
                ),
                1 => 
                array (
                ),
                2 => 
                array (
                ),
                3 => 
                array (
                ),
                4 => 
                array (
                ),
            ),
            4 => 
            array (
                0 => 
                array (
                ),
            ),
            5 => 
            array (
                0 => 
                array (
                ),
            ),
            6 => 
            array (
                0 => 
                array (
                ),
                1 => 
                array (
                ),
                2 => 
                array (
                ),
                3 => 
                array (
                ),
                4 => 
                array (
                ),
            ),
        );
        $this->_parts = array (
            0 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
                10 => NULL,
                11 => NULL,
                12 => NULL,
            ),
            1 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
                10 => NULL,
                11 => NULL,
                12 => NULL,
            ),
            2 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
                10 => NULL,
                11 => NULL,
                12 => NULL,
            ),
            3 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
            ),
            4 => 
            array (
                0 => NULL,
            ),
            5 => 
            array (
                0 => NULL,
            ),
            6 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
            ),
        );
        $this->_subst = array (
            -1 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
                10 => false,
                11 => false,
                12 => false,
            ),
            0 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
                10 => false,
                11 => false,
                12 => false,
            ),
            1 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
                10 => false,
                11 => false,
                12 => false,
            ),
            2 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
                10 => false,
                11 => false,
                12 => false,
            ),
            3 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
            ),
            4 => 
            array (
                0 => false,
            ),
            5 => 
            array (
                0 => false,
            ),
            6 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
            ),
        );
        $this->_conditions = array (
            'java.builtins' => 
            array (
                0 => 
                array (
                    0 => 'builtin',
                    1 => true,
                ),
            ),
        );
        $this->_kwmap = array (
            'types' => 'types',
            'reserved' => 'reserved',
            'builtin' => 'builtin',
        );
        $this->_defClass = 'code';
        $this->_checkDefines();
    }
    
}